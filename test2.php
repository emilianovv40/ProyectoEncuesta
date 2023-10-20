<?php
session_start();
require_once('db.php');

// Verificar si la variable de sesión id_usuario está definida antes de acceder a ella
if (!isset($_SESSION["correo"])) {
    header("Location: index.php"); // Redireccionar a la página de inicio de sesión si no hay sesión activa
    exit();
}

$correo = $_SESSION["correo"];
$id_usuario = obtenerIdDeUsuario($correo);

function obtenerIdDeUsuario($correo) {
    global $conn;
    $query = "SELECT id FROM usuarios WHERE correo = '$correo'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['id'];
}

// Verificar si el usuario ya ha realizado la encuesta
$sql_verificar_encuesta = "SELECT COUNT(*) as total FROM test40 WHERE id_usuario = $id_usuario";
$result_verificar_encuesta = mysqli_query($conn, $sql_verificar_encuesta);
$row_verificar_encuesta = mysqli_fetch_assoc($result_verificar_encuesta);
$encuesta_realizada = $row_verificar_encuesta['total'] > 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si el formulario de la encuesta ha sido enviado
    if (isset($_POST['submit_encuesta'])) {
        // Obtener las respuestas de la encuesta
        $pregunta1 = $_POST['pregunta1'];
        $pregunta2 = $_POST['pregunta2'];
        $pregunta3 = $_POST['pregunta3'];
        $pregunta4 = $_POST['pregunta4'];
        $pregunta5 = $_POST['pregunta5'];
        $pregunta6 = $_POST['pregunta6'];
        $pregunta7 = $_POST['pregunta7'];
        $pregunta8 = $_POST['pregunta8'];
        $pregunta9 = $_POST['pregunta9'];
        $pregunta10 = $_POST['pregunta10'];
        $pregunta11 = $_POST['pregunta11'];
        $pregunta12 = $_POST['pregunta12'];
        $pregunta13 = $_POST['pregunta13'];
        $pregunta14 = $_POST['pregunta14'];
        $pregunta15 = $_POST['pregunta15'];
        $pregunta16 = $_POST['pregunta16'];
        $pregunta17 = $_POST['pregunta17'];
        $pregunta18 = $_POST['pregunta18'];
        $pregunta19 = $_POST['pregunta19'];
        $pregunta20 = $_POST['pregunta20'];
        $pregunta21 = $_POST['pregunta21'];
        $pregunta22 = $_POST['pregunta22'];
        $pregunta23 = $_POST['pregunta23'];
        $pregunta24 = $_POST['pregunta24'];
        $pregunta25 = $_POST['pregunta25'];
        $pregunta26 = $_POST['pregunta26'];
        $pregunta27 = $_POST['pregunta27'];
        $pregunta28 = $_POST['pregunta28'];
        $pregunta29 = $_POST['pregunta29'];
        $pregunta30 = $_POST['pregunta30'];
        $pregunta31 = $_POST['pregunta31'];
        $pregunta32 = $_POST['pregunta32'];
        $pregunta33 = $_POST['pregunta33'];
        $pregunta34 = $_POST['pregunta34'];
        $pregunta35 = $_POST['pregunta35'];
        $pregunta36 = $_POST['pregunta36'];
        $pregunta37 = $_POST['pregunta37'];
        $pregunta38 = $_POST['pregunta38'];
        $pregunta39 = $_POST['pregunta39'];
        $pregunta40 = $_POST['pregunta40'];

        // Almacenar las respuestas en la base de datos
        $sql = "INSERT INTO test40 (id_usuario, numero_pregunta, respuesta) VALUES 
                ('$id_usuario', 'pregunta1', '$pregunta1'),
                ('$id_usuario', 'pregunta2', '$pregunta2'),
                ('$id_usuario', 'pregunta3', '$pregunta3'),
                ('$id_usuario', 'pregunta4', '$pregunta4'),
                ('$id_usuario', 'pregunta5', '$pregunta5'),
                ('$id_usuario', 'pregunta6', '$pregunta6'),
                ('$id_usuario', 'pregunta7', '$pregunta7'),
                ('$id_usuario', 'pregunta8', '$pregunta8'),
                ('$id_usuario', 'pregunta9', '$pregunta9'),
                ('$id_usuario', 'pregunta10', '$pregunta10'),
                ('$id_usuario', 'pregunta11', '$pregunta11'),
                ('$id_usuario', 'pregunta12', '$pregunta12'),
                ('$id_usuario', 'pregunta13', '$pregunta13'),
                ('$id_usuario', 'pregunta14', '$pregunta14'),
                ('$id_usuario', 'pregunta15', '$pregunta15'),
                ('$id_usuario', 'pregunta16', '$pregunta16'),
                ('$id_usuario', 'pregunta17', '$pregunta17'),
                ('$id_usuario', 'pregunta18', '$pregunta18'),
                ('$id_usuario', 'pregunta19', '$pregunta19'),
                ('$id_usuario', 'pregunta20', '$pregunta20'),
                ('$id_usuario', 'pregunta21', '$pregunta21'),
                ('$id_usuario', 'pregunta22', '$pregunta22'),
                ('$id_usuario', 'pregunta23', '$pregunta23'),
                ('$id_usuario', 'pregunta24', '$pregunta24'),
                ('$id_usuario', 'pregunta25', '$pregunta25'),
                ('$id_usuario', 'pregunta26', '$pregunta26'),
                ('$id_usuario', 'pregunta27', '$pregunta27'),
                ('$id_usuario', 'pregunta28', '$pregunta28'),
                ('$id_usuario', 'pregunta29', '$pregunta29'),
                ('$id_usuario', 'pregunta30', '$pregunta30'),
                ('$id_usuario', 'pregunta31', '$pregunta31'),
                ('$id_usuario', 'pregunta32', '$pregunta32'),
                ('$id_usuario', 'pregunta33', '$pregunta33'),
                ('$id_usuario', 'pregunta34', '$pregunta34'),
                ('$id_usuario', 'pregunta35', '$pregunta35'),
                ('$id_usuario', 'pregunta36', '$pregunta36'),
                ('$id_usuario', 'pregunta37', '$pregunta37'),
                ('$id_usuario', 'pregunta38', '$pregunta38'),
                ('$id_usuario', 'pregunta39', '$pregunta39'),
                ('$id_usuario', 'pregunta40', '$pregunta40')";
        if (mysqli_query($conn, $sql)) {
            header("Location: grafica2.php");
            exit();
        } else {
            echo "Error al enviar la encuesta: " . mysqli_error($conn);
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Encuesta - Test 1</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <h2>Encuesta - Test 2</h2>
    <?php if ($encuesta_realizada) : ?>
        <div class="alert alert-info">
            Ya se realizó esta encuesta.
        </div>
    <?php else : ?>
        <form action="test2.php" method="post" class="mt-3">
        <div class="form-group">
            <!-- pregunt 1 -->
            <label for="pregunta1">Pregunta 1. ¿Cuál de las siguientes actividades disfrutas más?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta1" id="pregunta1_1" value="auditivo" required>
                <label class="form-check-label" for="pregunta1_1">a) Escuchar música</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta1" id="pregunta1_2" value="visual">
                <label class="form-check-label" for="pregunta1_2">b) Ver películas</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta1" id="pregunta1_3" value="kinestesico">
                <label class="form-check-label" for="pregunta1_3">c) Bailar con buena música</label>
            </div>
            <!-- fin pregunt 1 -->
            <br>
            <!-- pregunt 2 -->
            <label for="pregunta2">Pregunta 2. ¿Que programa de televisión prefieres?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta2" id="pregunta2_1" value="visual" required>
                <label class="form-check-label" for="pregunta2_1">a) Reportajes de descubrimientos y lugares</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta2" id="pregunta2_2" value="kinestesico">
                <label class="form-check-label" for="pregunta2_2">b) Comico y de entretenimiento</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta2" id="pregunta2_3" value="auditivo">
                <label class="form-check-label" for="pregunta2_3">c) Noticias del mundo</label>
            </div>
            <!-- fin pregunt 2 -->
            <br>
            <!-- pregunt 3 -->
            <label for="pregunta3">Pregunta 3. ¿Cuando conversas con otra persona, tú?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta3" id="pregunta3_1" value="auditivo" required>
                <label class="form-check-label" for="pregunta3_1">a) La escuchas atentamente</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta3" id="pregunta3_2" value="visual">
                <label class="form-check-label" for="pregunta3_2">b) La observas</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta3" id="pregunta3_3" value="kinestesico">
                <label class="form-check-label" for="pregunta3_3">c) Tiendes a tocarla</label>
            </div>
            <!-- fin pregunt 3 -->
            <br>
            <!-- pregunt 4 -->
            <label for="pregunta4">Pregunta 4. Si pudieras adquirir uno de los siguientes articulos,¿cúal eligirias?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta4" id="pregunta4_1" value="kinestesico" required>
                <label class="form-check-label" for="pregunta4_1">a) Un jacuzzi</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta4" id="pregunta4_2" value="auditivo">
                <label class="form-check-label" for="pregunta4_2">b) Un estereo</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta4" id="pregunta4_3" value="visual">
                <label class="form-check-label" for="pregunta4_3">c) Un televisor</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 5 -->
            <label for="pregunta5">Pregunta 5 ¿Que prefieres hacer un sabado por la tarde?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta5" id="pregunta5_1" value="kinestesico" required>
                <label class="form-check-label" for="pregunta5_1">a) quedarte en casa</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta5" id="pregunta5_2" value="auditivo">
                <label class="form-check-label" for="pregunta5_2">b) ir a un concierto</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta5" id="pregunta5_3" value="visual">
                <label class="form-check-label" for="pregunta5_3">c) ir al cine</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 6 -->
            <label for="pregunta6">Pregunta 6 ¿Que tipo de examenes se te facilitan mas?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta6" id="pregunta6_1" value="auditivo" required>
                <label class="form-check-label" for="pregunta6_1">a) examen oral</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta6" id="pregunta6_2" value="visual">
                <label class="form-check-label" for="pregunta6_2">b) examen escrito</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta6" id="pregunta6_3" value="kinestesico">
                <label class="form-check-label" for="pregunta6_3">c) examen de opcion multiple</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 7 -->
            <label for="pregunta7">Pregunta 7 ¿Como te orientas mas facilmente?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta7" id="pregunta7_1" value="visual" required>
                <label class="form-check-label" for="pregunta7_1">a) mediante el uso de un mapa</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta7" id="pregunta7_2" value="auditivo">
                <label class="form-check-label" for="pregunta7_2">b) pidiendo indicaciones</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta7" id="pregunta7_3" value="kinestesico">
                <label class="form-check-label" for="pregunta7_3">c) a traves de la intuicion</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 8 -->
            <label for="pregunta8">Pregunta 8 ¿En que prefieres ocupar tu tiempo en un lugar de descanso?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta8" id="pregunta8_1" value="auditivo" required>
                <label class="form-check-label" for="pregunta8_1">a) pensar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta8" id="pregunta8_2" value="visual">
                <label class="form-check-label" for="pregunta8_2">b) caminar por los alrededores</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta8" id="pregunta8_3" value="kinestesico">
                <label class="form-check-label" for="pregunta8_3">c) descansar</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 9 -->
            <label for="pregunta9">Pregunta 9. ¿Que te halaga mas?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta9" id="pregunta9_1" value="visual" required>
                <label class="form-check-label" for="pregunta9_1">a) que te digan que tienes buen aspecto</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta9" id="pregunta9_2" value="kinestesico">
                <label class="form-check-label" for="pregunta9_2">b) que te digan que tienes un trato muy agradable</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta9" id="pregunta9_3" value="auditivo">
                <label class="form-check-label" for="pregunta9_3">c) que te digan que tienes una conversacion interesante</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 10 -->
            <label for="pregunta10">Pregunta 10 ¿Cual de estos ambuentes te atrae mas?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta10" id="pregunta10_1" value="kinestesico" required>
                <label class="form-check-label" for="pregunta10_1">a) uno en el que se sienta un clima agradable</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta10" id="pregunta10_2" value="auditivo">
                <label class="form-check-label" for="pregunta10_2">b) uno en el que se escuchen las olas del mar</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta10" id="pregunta10_3" value="visual">
                <label class="form-check-label" for="pregunta10_3">c) uno con una hermosa vista al oceano</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 11 -->
            <label for="pregunta11">Pregunta 11 ¿De que manera se te facilita aprender algo ?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta11" id="pregunta11_1" value="auditivo" required>
                <label class="form-check-label" for="pregunta11_1">a) repitiendo en voz alta</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta11" id="pregunta11_2" value="visual">
                <label class="form-check-label" for="pregunta11_2">b) Escribiendolo varias veces</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta11" id="pregunta11_3" value="kinestesico">
                <label class="form-check-label" for="pregunta11_3">c) relacionandolo con algo divertido</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 12 -->
            <label for="pregunta12">Pregunta 12 ¿A que evento preferirias asistir?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta12" id="pregunta12_1" value="kinestesico" required>
                <label class="form-check-label" for="pregunta12_1">a) a una reunion social</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta12" id="pregunta12_2" value="visual">
                <label class="form-check-label" for="pregunta12_2">b) a una exposicion de arte</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta12" id="pregunta12_3" value="auditivo">
                <label class="form-check-label" for="pregunta12_3">c) a una conferencia</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 13 -->
            <label for="pregunta13">Pregunta 13 ¿De que manera te formas una opinion de otras personas?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta13" id="pregunta13_1" value="auditivo" required>
                <label class="form-check-label" for="pregunta13_1">a) Por la sinceridad en su voz</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta13" id="pregunta13_2" value="kinestesico">
                <label class="form-check-label" for="pregunta13_2">b) Por la forma de estrecharte la mano</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta13" id="pregunta13_3" value="visual">
                <label class="form-check-label" for="pregunta13_3">c) Por la forma de estrecharte la mano</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 14 -->
            <label for="pregunta14">Pregunta 14 ¿Como te consideras?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta14" id="pregunta14_1" value="visual" required>
                <label class="form-check-label" for="pregunta14_1">a) Atletico</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta14" id="pregunta14_2" value="auditivo">
                <label class="form-check-label" for="pregunta14_2">b) intelectual</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta14" id="pregunta14_3" value="kinestesico">
                <label class="form-check-label" for="pregunta14_3">c) sociable</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 15 -->
            <label for="pregunta15">Pregunta 15 ¿Que tipo de peliculas te gustan mas?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta15" id="pregunta15_1" value="auditivo" required>
                <label class="form-check-label" for="pregunta15_1">a) clasicas</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta15" id="pregunta15_2" value="visual">
                <label class="form-check-label" for="pregunta15_2">b) de accion</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta15" id="pregunta15_3" value="kinestesico">
                <label class="form-check-label" for="pregunta15_3">c) de amor</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 16 -->
            <label for="pregunta16">Pregunta 16 ¿Como prefieres mantenerte en contacto con otra persona?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta16" id="pregunta16_1" value="visual" required>
                <label class="form-check-label" for="pregunta16_1">a) por correo electrónico</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta16" id="pregunta16_2" value="kinestesico">
                <label class="form-check-label" for="pregunta16_2">b) tomando un café juntos</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta16" id="pregunta16_3" value="auditivo">
                <label class="form-check-label" for="pregunta16_3">c) Por teléfono</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 17 -->
            <label for="pregunta17">Pregunta 17 ¿Cual de las siguientes frases se identifican mas contigo?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta17" id="pregunta17_1" value="kinestesico" required>
                <label class="form-check-label" for="pregunta17_1">a) me gusta que mi cohe se sienta bien al conducirlo</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta17" id="pregunta17_2" value="auditivo">
                <label class="form-check-label" for="pregunta17_2">b) percibo hasta el mas ligero ruido que hace mi coche</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta17" id="pregunta17_3" value="visual">
                <label class="form-check-label" for="pregunta17_3">c) es importante que mi coche este limpio por fuera y por dentro</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 18 -->
            <label for="pregunta18">Pregunta 18 ¿Como prefieres pasar el tiempo con tu novia o novio?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta18" id="pregunta18_1" value="auditivo" required>
                <label class="form-check-label" for="pregunta18_1">a) Conversando</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta18" id="pregunta18_2" value="kinestesico">
                <label class="form-check-label" for="pregunta18_2">b) Acariciándose</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta18" id="pregunta18_3" value="visual">
                <label class="form-check-label" for="pregunta18_3">c) Mirando algo juntos</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 19 -->
            <label for="pregunta19">Pregunta 19 Si no encuentras las llaves en una bolsa</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta19" id="pregunta19_1" value="visual" required>
                <label class="form-check-label" for="pregunta19_1">a) las buscas mirando</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta19" id="pregunta19_2" value="auditivo">
                <label class="form-check-label" for="pregunta19_2">b) sacudes la bolsa para oir el ruido</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta19" id="pregunta19_3" value="kinestesico">
                <label class="form-check-label" for="pregunta19_3">c) buscas al tacto</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 20 -->
            <label for="pregunta20">Pregunta 20 cuando tratas de recordar algo ¿como lo haces?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta20" id="pregunta20_1" value="visual" required>
                <label class="form-check-label" for="pregunta20_1">a) A través de imágenes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta20" id="pregunta20_2" value="kinestesico">
                <label class="form-check-label" for="pregunta20_2">b) A través de emociones</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta20" id="pregunta20_3" value="auditivo">
                <label class="form-check-label" for="pregunta20_3">c) A través de sonidos</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 21 -->
            <label for="pregunta21">Pregunta 21 si tuvieras dinero ¿que harias?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta21" id="pregunta21_1" value="kinestesico" required>
                <label class="form-check-label" for="pregunta21_1">a) comprar una casa</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta21" id="pregunta21_2" value="visual">
                <label class="form-check-label" for="pregunta21_2">b) viajar y conocer el mundo</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta21" id="pregunta21_3" value="auditivo">
                <label class="form-check-label" for="pregunta21_3">c) adquirir un estudio de grabacion</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 22 -->
            <label for="pregunta22">Pregunta 22 ¿Con que frase te identificas mas?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta22" id="pregunta22_1" value="auditivo" required>
                <label class="form-check-label" for="pregunta22_1">a) Reconozco a las personas por su voz</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta22" id="pregunta22_2" value="kinestesico">
                <label class="form-check-label" for="pregunta22_2">b) No recuerdo el aspecto de la gente</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta22" id="pregunta22_3" value="visual">
                <label class="form-check-label" for="pregunta22_3">c) Recuerdo el aspecto de alguien, pero no su nombre</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 23 -->
            <label for="pregunta23">Pregunta 23 Si tuvieras que quedarte en una isla desierta ¿que preferirias llevar contigo?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta23" id="pregunta23_1" value="visual" required>
                <label class="form-check-label" for="pregunta23_1">a) algunos buenos libros</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta23" id="pregunta23_2" value="auditivo">
                <label class="form-check-label" for="pregunta23_2">b) un radio portatil de alta frecuencia</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta23" id="pregunta23_3" value="kinestesico">
                <label class="form-check-label" for="pregunta23_3">c) golosinas y comida enlatada</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 24 -->
            <label for="pregunta24">Pregunta 24 ¿Cual de las siguientes entrenamientos prefieres?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta24" id="pregunta24_1" value="auditivo" required>
                <label class="form-check-label" for="pregunta24_1">a) tocar un instrumento musical</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta24" id="pregunta24_2" value="visual">
                <label class="form-check-label" for="pregunta24_2">b) sacar fotografias</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta24" id="pregunta24_3" value="kinestesico">
                <label class="form-check-label" for="pregunta24_3">c) actividades manuales</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 25 -->
            <label for="pregunta25">Pregunta 25 ¿Como es tu forma de vestir?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta25" id="pregunta25_1" value="visual" required>
                <label class="form-check-label" for="pregunta25_1">a) impecable</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta25" id="pregunta25_2" value="auditivo">
                <label class="form-check-label" for="pregunta25_2">b) informal</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta25" id="pregunta25_3" value="kinestesico">
                <label class="form-check-label" for="pregunta25_3">c) muy informal</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 26 -->
            <label for="pregunta26">Pregunta 26 ¿Que es lo que mas te gusta de una fogata nocturna?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta26" id="pregunta26_1" value="kinestesico" required>
                <label class="form-check-label" for="pregunta26_1">a) el calor del fuego y los bombones asados</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta26" id="pregunta26_2" value="auditivo">
                <label class="form-check-label" for="pregunta26_2">b) el sonido del fuego quemando la leña</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta26" id="pregunta26_3" value="visual">
                <label class="form-check-label" for="pregunta26_3">c) mirar el fuego y las estrellas</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 27 -->
            <label for="pregunta27">Pregunta 27 ¿Como se te facilita entender algo?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta27" id="pregunta27_1" value="auditivo" required>
                <label class="form-check-label" for="pregunta27_1">a) cuando te lo explican verbalmente</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta27" id="pregunta27_2" value="visual">
                <label class="form-check-label" for="pregunta27_2">b) cuando utilizan medios visuales</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta27" id="pregunta27_3" value="kinestesico">
                <label class="form-check-label" for="pregunta27_3">c) cuando se realizan a traves de alguna actividad</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 28 -->
            <label for="pregunta28">Pregunta 28 ¿Por que te distingues ?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta28" id="pregunta28_1" value="kinestesico" required>
                <label class="form-check-label" for="pregunta28_1">a) por tener una gran intuicion</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta28" id="pregunta28_2" value="auditivo">
                <label class="form-check-label" for="pregunta28_2">b) por ser un buen conversador</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta28" id="pregunta28_3" value="visual">
                <label class="form-check-label" for="pregunta28_3">c) por ser un buen observador</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 29 -->
            <label for="pregunta29">Pregunta 29 ¿Que es lo que mas disfrutas de un amanecer?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta29" id="pregunta29_1" value="kinestesico" required>
                <label class="form-check-label" for="pregunta29_1">a) la emocion de vivir un nuevo dia</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta29" id="pregunta29_2" value="visual">
                <label class="form-check-label" for="pregunta29_2">b) las tonalidades del cielo</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta29" id="pregunta29_3" value="auditivo">
                <label class="form-check-label" for="pregunta29_3">c) el canto de las aves</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 30 -->
            <label for="pregunta30">Pregunta 30 Si pudieras elegir ¿que preferirias ser?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta30" id="pregunta30_1" value="kinestesico" required>
                <label class="form-check-label" for="pregunta30_1">a) Un gran medico</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta30" id="pregunta30_2" value="auditivo">
                <label class="form-check-label" for="pregunta30_2">b) Un gran musico</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta30" id="pregunta30_3" value="visual">
                <label class="form-check-label" for="pregunta30_3">c) Un gran pintor</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 31 -->
            <label for="pregunta31">Pregunta 31 Cuando eliges tu ropa, ¿que es lo mas importante para ti?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta31" id="pregunta31_1" value="auditivo" required>
                <label class="form-check-label" for="pregunta31_1">a) que sea adecuada</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta31" id="pregunta31_2" value="visual">
                <label class="form-check-label" for="pregunta31_2">b) que luzca bien</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta31" id="pregunta31_3" value="kinestesico">
                <label class="form-check-label" for="pregunta31_3">c) que sea comoda</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 32 -->
            <label for="pregunta32">Pregunta 32 ¿Qué es lo que más disfrutas de una habitación?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta32" id="pregunta32_1" value="auditivo" required>
                <label class="form-check-label" for="pregunta32_1">a) que sea silenciosa</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta32" id="pregunta32_2" value="kinestesico">
                <label class="form-check-label" for="pregunta32_2">b) que sea confortable</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta32" id="pregunta32_3" value="visual">
                <label class="form-check-label" for="pregunta32_3">c) Un que este limpia y ordenada</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 33 -->
            <label for="pregunta33">Pregunta 33  ¿Qué es más sexy para ti? </label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta33" id="pregunta33_1" value="visual" required>
                <label class="form-check-label" for="pregunta33_1">a) una iluminacion tenue</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta33" id="pregunta33_2" value="kinestesico">
                <label class="form-check-label" for="pregunta33_2">b) el perfume</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta33" id="pregunta33_3" value="auditivo">
                <label class="form-check-label" for="pregunta33_3">c) cierto tipo de musica</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 34 -->
            <label for="pregunta34">Pregunta 34 ¿A qué tipo de espectáculo preferirías asistir?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta34" id="pregunta34_1" value="auditivo" required>
                <label class="form-check-label" for="pregunta34_1">a) a un concierto de musica</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta34" id="pregunta34_2" value="visual">
                <label class="form-check-label" for="pregunta34_2">b) a un espectaculo de magia</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta34" id="pregunta34_3" value="kinestesico">
                <label class="form-check-label" for="pregunta34_3">c) a una muestra gastronomica</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 35 -->
            <label for="pregunta35">Pregunta 35  ¿Qué te atrae más de una persona?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta35" id="pregunta35_1" value="kinestesico" required>
                <label class="form-check-label" for="pregunta35_1">a) su trato y forma de ser</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta35" id="pregunta35_2" value="visual">
                <label class="form-check-label" for="pregunta35_2">b) su aspecto fisico</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta35" id="pregunta35_3" value="auditivo">
                <label class="form-check-label" for="pregunta35_3">c) su conversacion</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 36 -->
            <label for="pregunta36">Pregunta 36 Cuando vas de compras, ¿en dónde pasas mucho tiempo?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta36" id="pregunta36_1" value="visual" required>
                <label class="form-check-label" for="pregunta36_1">a) en una libreria</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta36" id="pregunta36_2" value="kinestesico">
                <label class="form-check-label" for="pregunta36_2">b) en una perfumeria</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta36" id="pregunta36_3" value="auditivo">
                <label class="form-check-label" for="pregunta36_3">c) en una tienda de discos</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 37 -->
            <label for="pregunta37">Pregunta 37 . ¿Cuáles tu idea de una noche romántica?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta37" id="pregunta37_1" value="visual" required>
                <label class="form-check-label" for="pregunta37_1">a) </label>a la luz de las velas
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta37" id="pregunta37_2" value="auditivo">
                <label class="form-check-label" for="pregunta37_2">b) con musica romantica</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta37" id="pregunta37_3" value="kinestesico">
                <label class="form-check-label" for="pregunta37_3">c) bailando tranquilamente</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 38 -->
            <label for="pregunta38">Pregunta 38  ¿Qué es lo que más disfrutas de viajar?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta38" id="pregunta38_1" value="kinestesico" required>
                <label class="form-check-label" for="pregunta38_1">a) conocer personas y hacer nuevos amigos</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta38" id="pregunta38_2" value="visual">
                <label class="form-check-label" for="pregunta38_2">b) Conocer lugares nuevos</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta38" id="pregunta38_3" value="auditivo">
                <label class="form-check-label" for="pregunta38_3">c)  Aprender sobre otras costumbres</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 39 -->
            <label for="pregunta39">Pregunta 39 . Cuando estás en la ciudad, ¿qué es lo que más hechas de 
                                    menos del campo?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta39" id="pregunta39_1" value="kinestesico" required>
                <label class="form-check-label" for="pregunta39_1">a) l aire limpio y refrescante</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta39" id="pregunta39_2" value="visual">
                <label class="form-check-label" for="pregunta39_2">b) los paisajes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta39" id="pregunta39_3" value="auditivo">
                <label class="form-check-label" for="pregunta39_3">c) la tranquilidad</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
            <!-- pregunt 40 -->
            <label for="pregunta40">Pregunta 40  Si te ofrecieran uno de los siguientes empleos, ¿cuál 
                                    elegirías?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta40" id="pregunta40_1" value="auditivo" required>
                <label class="form-check-label" for="pregunta40_1">a) Director de una estación de radio</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta40" id="pregunta40_2" value="kinestesico">
                <label class="form-check-label" for="pregunta40_2">b) Director de un club deportivo</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta40" id="pregunta40_3" value="visual">
                <label class="form-check-label" for="pregunta40_3">c) Director de una revista</label>
            </div>
            <!-- fin pregunt 4 -->
            <br>
</div>
        <button type="submit" name="submit_encuesta" class="btn btn-primary">Enviar Encuesta</button>
    </form>
    <?php endif; ?>
</div>

<!-- Bootstrap JS y jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
