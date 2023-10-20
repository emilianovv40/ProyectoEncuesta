<!DOCTYPE html>
<html>
<head>
    <title>Gráfica 3</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
<?php
session_start();
require_once('db.php');

// Verificar si la variable de sesión correo está definida antes de acceder a ella
if (!isset($_SESSION["correo"])) {
    header("Location: index.php"); // Redireccionar a la página de inicio de sesión si no hay sesión activa
    exit();
}

// Obtener el ID del usuario
$correo = $_GET["correo"];
$id_usuario = obtenerIdDeUsuario($correo);

function obtenerIdDeUsuario($correo) {
    global $conn;
    $query = "SELECT id FROM usuarios WHERE correo = '$correo'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['id'];
}

// Obtener resultados de la tabla test36 agrupados por tipo_pregunta y sumar las respuestas
$sql = "SELECT tipo_pregunta, SUM(respuesta) AS total_respuestas FROM test80 WHERE id_usuario = $id_usuario GROUP BY tipo_pregunta";
$result = mysqli_query($conn, $sql);

// Crear un arreglo para almacenar los resultados
$resultados = array();
while ($row = mysqli_fetch_assoc($result)) {
    $resultados[$row['tipo_pregunta']] = $row['total_respuestas'];
}
?>

<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <h2>Gráfica 3</h2>
    <div style="max-width: 600px;">
        <canvas id="myChart"></canvas>
    </div>

    <!-- Agregar el botón que te regresa al dashboard -->
    <div class="mt-4">
        <a href="dashboard.php" class="btn btn-primary">Volver al Dashboard</a>
    </div>
</div>

<!-- Bootstrap JS y jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Datos para la gráfica
    var resultados = <?php echo json_encode($resultados); ?>;
    var labels = Object.keys(resultados);
    var data = Object.values(resultados);

    // Crear la gráfica de radar
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'radar', // Cambiar el tipo de gráfica a 'radar'
        data: {
            labels: labels,
            datasets: [{
                label: 'Total Respuestas',
                data: data,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scale: {
                ticks: {
                    beginAtZero: true
                },
                r:
                {
                    suggestedMin: 5,
                    suggestedMax: 20,
                }
            },
            plugins: {
                legend: {
                    display: true,
                    position: 'top'
                },
                title: {
                    display: true,
                    text: 'Resultados de la Encuesta por Tipo de Pregunta'
                }
            }
        }
    });
</script>

</body>
</html>
