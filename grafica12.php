<!DOCTYPE html>
<html>
<head>
    <title>Gráfica 1</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<?php
session_start();
require_once('db.php');

if (!isset($_SESSION["correo"])) {
    header("Location: index.php");
    exit();
}

$correo = $_POST['correo']; // Obtener el correo del usuario desde el formulario

// Obtener el ID del usuario a partir del correo
$sql_id_usuario = "SELECT id FROM usuarios WHERE correo = '$correo'";
$result_id_usuario = mysqli_query($conn, $sql_id_usuario);
$row_id_usuario = mysqli_fetch_assoc($result_id_usuario);
$user_id = $row_id_usuario['id'];

// Obtener resultados de la tabla test36 agrupados por tipo_pregunta y sumar las respuestas
$sql = "SELECT tipo_pregunta, SUM(respuesta) AS total_respuestas FROM test36 WHERE id_usuario = $user_id GROUP BY tipo_pregunta";
$result = mysqli_query($conn, $sql);

$resultados = array();
$total_respuestas = 0;

while ($row = mysqli_fetch_assoc($result)) {
    $resultados[$row['tipo_pregunta']] = $row['total_respuestas'];
    $total_respuestas += $row['total_respuestas'];
}

$porcentajes = array();

foreach ($resultados as $tipo_pregunta => $total_respuesta) {
    $porcentaje = ($total_respuesta / $total_respuestas) * 100;
    $porcentajes[$tipo_pregunta] = round($porcentaje, 2);
}
?>

<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <h2>Gráfica 1 </h2>
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
    var porcentajes = <?php echo json_encode($porcentajes); ?>;
    var labels = Object.keys(porcentajes);
    var data = Object.values(porcentajes);

    // Crear la gráfica
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie', // Cambiar el tipo de gráfica a 'pie'
        data: {
            labels: labels,
            datasets: [{
                label: 'Porcentaje Respuestas',
                data: data,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
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