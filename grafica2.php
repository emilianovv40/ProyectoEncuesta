<!DOCTYPE html>
<html>
<head>
    <title>Gráfica 2</title>
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
$correo = $_SESSION["correo"];
$id_usuario = obtenerIdDeUsuario($correo);

function obtenerIdDeUsuario($correo) {
    global $conn;
    $query = "SELECT id FROM usuarios WHERE correo = '$correo'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['id'];
}

// Obtener el conteo de cada tipo de respuesta
$sql = "SELECT respuesta, COUNT(*) as total FROM test40 WHERE id_usuario = $id_usuario GROUP BY respuesta";
$result = mysqli_query($conn, $sql);

// Crear un arreglo para almacenar los resultados
$resultados = array();
while ($row = mysqli_fetch_assoc($result)) {
    $resultados[$row['respuesta']] = $row['total'];
}

?>

<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <h2>Gráfica 2</h2>
    <div style="max-width: 600px;">
        <canvas id="myChart"></canvas>
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

    // Crear la gráfica de barras
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar', // Tipo de gráfica de barras
        data: {
            labels: labels,
            datasets: [{
                label: 'Conteo de Respuestas',
                data: data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    display: false // Ocultar la leyenda
                },
                title: {
                    display: true,
                    text: 'Conteo de Respuestas por Tipo'
                }
            }
        }
    });
</script>

</body>
</html>
