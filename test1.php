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
$sql_verificar_encuesta = "SELECT COUNT(*) as total FROM test36 WHERE id_usuario = $id_usuario";
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
        $pregunta6 = $_POST['pregunta7'];
        $pregunta7 = $_POST['pregunta6'];
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
        

        // Almacenar las respuestas en la base de datos
        $sql = "INSERT INTO test36 (id_usuario, tipo_pregunta, respuesta) VALUES 
                ('$id_usuario', 'visual', '$pregunta1'),
                ('$id_usuario', 'auditivo', '$pregunta2'),
                ('$id_usuario', 'kinestesico', '$pregunta3'),
                ('$id_usuario', 'auditivo', '$pregunta4'),
                ('$id_usuario', 'visual', '$pregunta5'),
                ('$id_usuario', 'kinestesico', '$pregunta6'),
                ('$id_usuario', 'kinestesico', '$pregunta7'),
                ('$id_usuario', 'kinestesico', '$pregunta8'),
                ('$id_usuario', 'visual', '$pregunta9'),
                ('$id_usuario', 'visual', '$pregunta10'),
                ('$id_usuario', 'visual', '$pregunta11'),
                ('$id_usuario', 'auditivo', '$pregunta12'),
                ('$id_usuario', 'auditivo', '$pregunta13'),
                ('$id_usuario', 'kinestesico', '$pregunta14'),
                ('$id_usuario', 'auditivo', '$pregunta15'),
                ('$id_usuario', 'visual', '$pregunta16'),
                ('$id_usuario', 'visual', '$pregunta17'),
                ('$id_usuario', 'kinestesico', '$pregunta18'),
                ('$id_usuario', 'auditivo', '$pregunta19'),
                ('$id_usuario', 'auditivo', '$pregunta20'),
                ('$id_usuario', 'kinestesico', '$pregunta21'),
                ('$id_usuario', 'visual', '$pregunta22'),
                ('$id_usuario', 'auditivo', '$pregunta23'),
                ('$id_usuario', 'auditivo', '$pregunta24'),
                ('$id_usuario', 'kinestesico', '$pregunta25'),
                ('$id_usuario', 'visual', '$pregunta26'),
                ('$id_usuario', 'visual', '$pregunta27'),
                ('$id_usuario', 'auditivo', '$pregunta28'),
                ('$id_usuario', 'auditivo', '$pregunta29'),
                ('$id_usuario', 'kinestesico', '$pregunta30'),
                ('$id_usuario', 'kinestesico', '$pregunta31'),
                ('$id_usuario', 'visual', '$pregunta32'),
                ('$id_usuario', 'auditivo', '$pregunta33'),
                ('$id_usuario', 'kinestesico', '$pregunta34'),
                ('$id_usuario', 'kinestesico', '$pregunta35'),
                ('$id_usuario', 'visual', '$pregunta36')";
        if (mysqli_query($conn, $sql)) {
            header("Location: grafica1.php");
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
    <h2>Encuesta - Test 1</h2>
    <?php if ($encuesta_realizada) : ?>
        <div class="alert alert-info">
            Ya se realizó esta encuesta.
        </div>
    <?php else : ?>
        <form action="test1.php" method="post" class="mt-3">
        <div class="form-group">
            <label for="pregunta1">Pregunta 1: ¿Puedo recordar algo mejor si lo escribo? (1-5)</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta1" id="pregunta1_1" value="1" required>
                <label class="form-check-label" for="pregunta1_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta1" id="pregunta1_2" value="2">
                <label class="form-check-label" for="pregunta1_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta1" id="pregunta1_3" value="3">
                <label class="form-check-label" for="pregunta1_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta1" id="pregunta1_4" value="4">
                <label class="form-check-label" for="pregunta1_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta1" id="pregunta1_5" value="5">
                <label class="form-check-label" for="pregunta1_5">5</label>
            </div>
        </div>
        <div class="form-group">
            <label for="pregunta2">Pregunta 2: ¿Al leer, oigo las palabras en mi cabeza o leo en voz alta? (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta2" id="pregunta2_1" value="1" required>
                <label class="form-check-label" for="pregunta2_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta2" id="pregunta2_2" value="2">
                <label class="form-check-label" for="pregunta2_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta2" id="pregunta2_3" value="3">
                <label class="form-check-label" for="pregunta2_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta2" id="pregunta2_4" value="4">
                <label class="form-check-label" for="pregunta2_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta2" id="pregunta2_5" value="5">
                <label class="form-check-label" for="pregunta2_5">5</label>
            </div>
        </div>
        <div class="form-group">
            <label for="pregunta3">Pregunta 3: ¿No me gusta leer o escuchar instrucciones, prefiero simplemente comenzar a hacer las cosas? (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta3" id="pregunta3_1" value="1" required>
                <label class="form-check-label" for="pregunta3_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta3" id="pregunta3_2" value="2">
                <label class="form-check-label" for="pregunta3_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta3" id="pregunta3_3" value="3">
                <label class="form-check-label" for="pregunta3_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta3" id="pregunta3_4" value="4">
                <label class="form-check-label" for="pregunta3_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta3" id="pregunta3_5" value="5">
                <label class="form-check-label" for="pregunta3_5">5</label>
            </div>
        </div>
        <div class="form-group">
    <label for="pregunta4">Pregunta 4: ¿Necesito hablar las cosas para entenderlas mejor? (1-5)</label><br>
    <!-- Agregar el checklist de la pregunta 4 de manera similar -->
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="pregunta4" id="pregunta4_1" value="1" required>
        <label class="form-check-label" for="pregunta4_1">1</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="pregunta4" id="pregunta4_2" value="2">
        <label class="form-check-label" for="pregunta4_2">2</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="pregunta4" id="pregunta4_3" value="3">
        <label class="form-check-label" for="pregunta4_3">3</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="pregunta4" id="pregunta4_4" value="4">
        <label class="form-check-label" for="pregunta4_4">4</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="pregunta4" id="pregunta4_5" value="5">
        <label class="form-check-label" for="pregunta4_5">5</label>
    </div>
    <!--pregunta 5-->
    <div class="form-group">
            <label for="pregunta5">Pregunta 5: Puedo visualizar imagenes en mi cabeza (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta5" id="pregunta5_1" value="1" required>
                <label class="form-check-label" for="pregunta5_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta5" id="pregunta5_2" value="2">
                <label class="form-check-label" for="pregunta5_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta5" id="pregunta5_3" value="3">
                <label class="form-check-label" for="pregunta5_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta5" id="pregunta5_4" value="4">
                <label class="form-check-label" for="pregunta5_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta5" id="pregunta5_5" value="5">
                <label class="form-check-label" for="pregunta5_5">5</label>
            </div>
        </div>
        <!--pregunta 6-->
    <div class="form-group">
            <label for="pregunta6">Pregunta 6: Puedo estudiar mejor si escuhco musica (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta6" id="pregunta6_1" value="1" required>
                <label class="form-check-label" for="pregunta6_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta6" id="pregunta6_2" value="2">
                <label class="form-check-label" for="pregunta6_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta6" id="pregunta6_3" value="3">
                <label class="form-check-label" for="pregunta6_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta6" id="pregunta6_4" value="4">
                <label class="form-check-label" for="pregunta6_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta6" id="pregunta6_5" value="5">
                <label class="form-check-label" for="pregunta6_5">5</label>
            </div>
        </div>
        <!--pregunta 7-->
    <div class="form-group">
            <label for="pregunta7">Pregunta 7: Necesito recreos frecuentes cuando estudio (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta7" id="pregunta7_1" value="1" required>
                <label class="form-check-label" for="pregunta7_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta7" id="pregunta7_2" value="2">
                <label class="form-check-label" for="pregunta7_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta7" id="pregunta7_3" value="3">
                <label class="form-check-label" for="pregunta7_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta7" id="pregunta7_4" value="4">
                <label class="form-check-label" for="pregunta7_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta7" id="pregunta7_5" value="5">
                <label class="form-check-label" for="pregunta7_5">5</label>
            </div>
        </div>
        <!--pregunta 8-->
    <div class="form-group">
            <label for="pregunta8">Pregunta 8: Pienso mejor cuando tengo la libertad de moverme, estar sentado detras de un escritorio no es para mi (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta8" id="pregunta8_1" value="1" required>
                <label class="form-check-label" for="pregunta8_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta8" id="pregunta8_2" value="2">
                <label class="form-check-label" for="pregunta8_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta8" id="pregunta8_3" value="3">
                <label class="form-check-label" for="pregunta8_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta8" id="pregunta8_4" value="4">
                <label class="form-check-label" for="pregunta8_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta8" id="pregunta8_5" value="5">
                <label class="form-check-label" for="pregunta8_5">5</label>
            </div>
        </div>
        <!--pregunta 9-->
    <div class="form-group">
            <label for="pregunta9">Pregunta 9: Tomo muchas notas de lo que leo y escuhco (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta9" id="pregunta9_1" value="1" required>
                <label class="form-check-label" for="pregunta9_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta9" id="pregunta9_2" value="2">
                <label class="form-check-label" for="pregunta9_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta9" id="pregunta9_3" value="3">
                <label class="form-check-label" for="pregunta9_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta9" id="pregunta9_4" value="4">
                <label class="form-check-label" for="pregunta9_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta9" id="pregunta9_5" value="5">
                <label class="form-check-label" for="pregunta9_5">5</label>
            </div>
        </div>
        <!--pregunta 10-->
    <div class="form-group">
            <label for="pregunta10">Pregunta 10: Me ayuda mirar a la persona que esta hablando, me mantiene enfocado (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta10" id="pregunta10_1" value="1" required>
                <label class="form-check-label" for="pregunta10_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta10" id="pregunta10_2" value="2">
                <label class="form-check-label" for="pregunta10_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta10" id="pregunta10_3" value="3">
                <label class="form-check-label" for="pregunta10_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta10" id="pregunta10_4" value="4">
                <label class="form-check-label" for="pregunta10_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta10" id="pregunta10_5" value="5">
                <label class="form-check-label" for="pregunta10_5">5</label>
            </div>
        </div>
        <!--pregunta 11-->
    <div class="form-group">
            <label for="pregunta11">Pregunta 11: Se me hace dificil entender lo que una persona esta diciendo si hay ruidos alrededor (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta11" id="pregunta11_1" value="1" required>
                <label class="form-check-label" for="pregunta11_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta11" id="pregunta11_2" value="2">
                <label class="form-check-label" for="pregunta11_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta11" id="pregunta11_3" value="3">
                <label class="form-check-label" for="pregunta11_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta11" id="pregunta11_4" value="4">
                <label class="form-check-label" for="pregunta11_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta11" id="pregunta11_5" value="5">
                <label class="form-check-label" for="pregunta11_5">5</label>
            </div>
        </div>
        <!--pregunta 12-->
    <div class="form-group">
            <label for="pregunta12">Pregunta 12: Prefiero que alguien me diga como tengo que hacer las cosas que leer las instrucciones (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta12" id="pregunta12_1" value="1" required>
                <label class="form-check-label" for="pregunta12_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta12" id="pregunta12_2" value="2">
                <label class="form-check-label" for="pregunta12_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta12" id="pregunta12_3" value="3">
                <label class="form-check-label" for="pregunta12_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta12" id="pregunta12_4" value="4">
                <label class="form-check-label" for="pregunta12_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta12" id="pregunta12_5" value="5">
                <label class="form-check-label" for="pregunta12_5">5</label>
            </div>
        </div>
        <!--pregunta 13-->
    <div class="form-group">
            <label for="pregunta13">Pregunta 13: Prefiero escuchar una conferencia o una grabacion a leer un libro (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta13" id="pregunta13_1" value="1" required>
                <label class="form-check-label" for="pregunta13_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta13" id="pregunta13_2" value="2">
                <label class="form-check-label" for="pregunta3_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta13" id="pregunta13_3" value="3">
                <label class="form-check-label" for="pregunta13_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta13" id="pregunta13_4" value="4">
                <label class="form-check-label" for="pregunta13_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta13" id="pregunta13_5" value="5">
                <label class="form-check-label" for="pregunta13_5">5</label>
            </div>
        </div>
        <!--pregunta 14-->
    <div class="form-group">
            <label for="pregunta14">Pregunta 14: Cuando no puedo pensar en una palabra especifica, uso mis manos y llamo al objeto "coso" (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta14" id="pregunta14_1" value="1" required>
                <label class="form-check-label" for="pregunta14_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta14" id="pregunta14_2" value="2">
                <label class="form-check-label" for="pregunta14_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta14" id="pregunta14_3" value="3">
                <label class="form-check-label" for="pregunta14_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta14" id="pregunta14_4" value="4">
                <label class="form-check-label" for="pregunta14_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta14" id="pregunta14_5" value="5">
                <label class="form-check-label" for="pregunta14_5">5</label>
            </div>
        </div>
        <!--pregunta 15-->
    <div class="form-group">
            <label for="pregunta15">Pregunta 15: Puedo seguir facilmente a una persona que esta hablando aunque mi cabeza este hacia abajo o me encuentre mirando por una ventana (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta15" id="pregunta15_1" value="1" required>
                <label class="form-check-label" for="pregunta15_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta15" id="pregunta152" value="2">
                <label class="form-check-label" for="pregunta15_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta15" id="pregunta15_3" value="3">
                <label class="form-check-label" for="pregunta15_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta15" id="pregunta15_4" value="4">
                <label class="form-check-label" for="pregunta15_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta15" id="pregunta15_5" value="5">
                <label class="form-check-label" for="pregunta15_5">5</label>
            </div>
        </div>
        <!--pregunta 16-->
    <div class="form-group">
            <label for="pregunta16">Pregunta 16: Es mas facil para mi hacer un trabajo en un lugar tranquilo (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta16" id="pregunta16_1" value="1" required>
                <label class="form-check-label" for="pregunta16_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta16" id="pregunta16_2" value="2">
                <label class="form-check-label" for="pregunta16_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta16" id="pregunta16_3" value="3">
                <label class="form-check-label" for="pregunta16_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta16" id="pregunta16_4" value="4">
                <label class="form-check-label" for="pregunta16_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta16" id="pregunta16_5" value="5">
                <label class="form-check-label" for="pregunta16_5">5</label>
            </div>
        </div>
        <!--pregunta 17-->
    <div class="form-group">
            <label for="pregunta17">Pregunta 17: Me resulta facil entender mapas, tablas y graficos (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta17" id="pregunta17_1" value="1" required>
                <label class="form-check-label" for="pregunta17_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta17" id="pregunta17_2" value="2">
                <label class="form-check-label" for="pregunta17_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta17" id="pregunta17_3" value="3">
                <label class="form-check-label" for="pregunta17_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta17" id="pregunta17_4" value="4">
                <label class="form-check-label" for="pregunta17_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta17" id="pregunta17_5" value="5">
                <label class="form-check-label" for="pregunta17_5">5</label>
            </div>
        </div>
        <!--pregunta 18-->
    <div class="form-group">
            <label for="pregunta18">Pregunta 18: Cuando comienzo un articulo o un libro, prefiero espiar la ultima pagina (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta18" id="pregunta18_1" value="1" required>
                <label class="form-check-label" for="pregunta18_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta18" id="pregunta18_2" value="2">
                <label class="form-check-label" for="pregunta18_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta18" id="pregunta18_3" value="3">
                <label class="form-check-label" for="pregunta18_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta18" id="pregunta18_4" value="4">
                <label class="form-check-label" for="pregunta18_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta18" id="pregunta18_5" value="5">
                <label class="form-check-label" for="pregunta18_5">5</label>
            </div>
        </div>
        <!--pregunta 19-->
    <div class="form-group">
            <label for="pregunta19">Pregunta 19: Recuerdo mejor lo que la gente dice, que su aspecto (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta19" id="pregunta19_1" value="1" required>
                <label class="form-check-label" for="pregunta19_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta19" id="pregunta19_2" value="2">
                <label class="form-check-label" for="pregunta19_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta19" id="pregunta19_3" value="3">
                <label class="form-check-label" for="pregunta19_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta19" id="pregunta19_4" value="4">
                <label class="form-check-label" for="pregunta19_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta19" id="pregunta19_5" value="5">
                <label class="form-check-label" for="pregunta19_5">5</label>
            </div>
        </div>
        <!--pregunta 20-->
    <div class="form-group">
            <label for="pregunta20">Pregunta 20: Recuerdo mejor si estudio en voz alta con alguien (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta20" id="pregunta20_1" value="1" required>
                <label class="form-check-label" for="pregunta20_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta20" id="pregunta20_2" value="2">
                <label class="form-check-label" for="pregunta20_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta20" id="pregunta20_3" value="3">
                <label class="form-check-label" for="pregunta20_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta20" id="pregunta20_4" value="4">
                <label class="form-check-label" for="pregunta20_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta20" id="pregunta20_5" value="5">
                <label class="form-check-label" for="pregunta20_5">5</label>
            </div>
        </div>
        <!--pregunta 21-->
    <div class="form-group">
            <label for="pregunta21">Pregunta 21: Tomo notas, pero nunca vuelvo a releerlas (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta21" id="pregunta21_1" value="1" required>
                <label class="form-check-label" for="pregunta21_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta21" id="pregunta21_2" value="2">
                <label class="form-check-label" for="pregunta21_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta21" id="pregunta21_3" value="3">
                <label class="form-check-label" for="pregunta21_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta21" id="pregunta21_4" value="4">
                <label class="form-check-label" for="pregunta21_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta21" id="pregunta21_5" value="5">
                <label class="form-check-label" for="pregunta21_5">5</label>
            </div>
        </div>
        <!--pregunta 22-->
    <div class="form-group">
            <label for="pregunta22">Pregunta 22: Cuando estou concentrado leyendo o escribiendo, la radio no me molesta (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta22" id="pregunta22_1" value="1" required>
                <label class="form-check-label" for="pregunta22_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta22" id="pregunta22_2" value="2">
                <label class="form-check-label" for="pregunta22_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta22" id="pregunta22_3" value="3">
                <label class="form-check-label" for="pregunta22_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta22" id="pregunta22_4" value="4">
                <label class="form-check-label" for="pregunta22_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta22" id="pregunta22_5" value="5">
                <label class="form-check-label" for="pregunta22_5">5</label>
            </div>
        </div>
        <!--pregunta 23-->
    <div class="form-group">
            <label for="pregunta23">Pregunta 23: Me resulta dificil crear imagenes en mi cabeza (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta23" id="pregunta23_1" value="1" required>
                <label class="form-check-label" for="pregunta23_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta23" id="pregunta23_2" value="2">
                <label class="form-check-label" for="pregunta23_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta23" id="pregunta23_3" value="3">
                <label class="form-check-label" for="pregunta23_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta23" id="pregunta23_4" value="4">
                <label class="form-check-label" for="pregunta23_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta23" id="pregunta23_5" value="5">
                <label class="form-check-label" for="pregunta23_5">5</label>
            </div>
        </div>
        <!--pregunta 24-->
    <div class="form-group">
            <label for="pregunta24">Pregunta 24: Me resulta util decir en voz alta las tareas que tengo para hacer (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta24" id="pregunta24_1" value="1" required>
                <label class="form-check-label" for="pregunta24_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta24" id="pregunta24_2" value="2">
                <label class="form-check-label" for="pregunta24_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta24" id="pregunta24_3" value="3">
                <label class="form-check-label" for="pregunta24_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta24" id="pregunta24_4" value="4">
                <label class="form-check-label" for="pregunta24_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta24" id="pregunta24_5" value="5">
                <label class="form-check-label" for="pregunta24_5">5</label>
            </div>
        </div>
        <!--pregunta 25-->
    <div class="form-group">
            <label for="pregunta25">Pregunta 25: Mi cuaderno y mi escritorio pueden verse un desatre, pero se exactamente donde esta cada cosa (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta25" id="pregunta25_1" value="1" required>
                <label class="form-check-label" for="pregunta25_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta25" id="pregunta25_2" value="2">
                <label class="form-check-label" for="pregunta25_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta25" id="pregunta25_3" value="3">
                <label class="form-check-label" for="pregunta25_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta25" id="pregunta25_4" value="4">
                <label class="form-check-label" for="pregunta25_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta25" id="pregunta25_5" value="5">
                <label class="form-check-label" for="pregunta25_5">5</label>
            </div>
        </div>
        <!--pregunta 26-->
    <div class="form-group">
            <label for="pregunta26">Pregunta 26: Cuando estoy en un examen, puedo ver la pagina en el libro de textos y la respuesta (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta26" id="pregunta26_1" value="1" required>
                <label class="form-check-label" for="pregunta26_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta26" id="pregunta26_2" value="2">
                <label class="form-check-label" for="pregunta26_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta26" id="pregunta26_3" value="3">
                <label class="form-check-label" for="pregunta26_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta26" id="pregunta26_4" value="4">
                <label class="form-check-label" for="pregunta26_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta26" id="pregunta26_5" value="5">
                <label class="form-check-label" for="pregunta26_5">5</label>
            </div>
        </div>
        <!--pregunta 27-->
    <div class="form-group">
            <label for="pregunta27">Pregunta 27: No puedo recordar una broma lo suficiente para contarla luego (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta27" id="pregunta27_1" value="1" required>
                <label class="form-check-label" for="pregunta27_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta27" id="pregunta27_2" value="2">
                <label class="form-check-label" for="pregunta27_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta27" id="pregunta27_3" value="3">
                <label class="form-check-label" for="pregunta27_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta27" id="pregunta27_4" value="4">
                <label class="form-check-label" for="pregunta27_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta27" id="pregunta27_5" value="5">
                <label class="form-check-label" for="pregunta27_5">5</label>
            </div>
        </div>
        <!--pregunta 28-->
    <div class="form-group">
            <label for="pregunta28">Pregunta 28: Al aprender algo nuevo, prefiero escuchar la informacion, luego leer y luego hacerlo (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta28" id="pregunta28_1" value="1" required>
                <label class="form-check-label" for="pregunta28_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta28" id="pregunta28_2" value="2">
                <label class="form-check-label" for="pregunta28_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta28" id="pregunta28_3" value="3">
                <label class="form-check-label" for="pregunta28_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta28" id="pregunta28_4" value="4">
                <label class="form-check-label" for="pregunta28_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta28" id="pregunta28_5" value="5">
                <label class="form-check-label" for="pregunta28_5">5</label>
            </div>
        </div>
        <!--pregunta 29-->
    <div class="form-group">
            <label for="pregunta29">Pregunta 29: Me gusta completar una tarea antes de comenzar otra (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta29" id="pregunta29_1" value="1" required>
                <label class="form-check-label" for="pregunta29_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta29" id="pregunta29_2" value="2">
                <label class="form-check-label" for="pregunta29_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta29" id="pregunta29_3" value="3">
                <label class="form-check-label" for="pregunta29_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta29" id="pregunta29_4" value="4">
                <label class="form-check-label" for="pregunta29_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta29" id="pregunta29_5" value="5">
                <label class="form-check-label" for="pregunta29_5">5</label>
            </div>
        </div>
        <!--pregunta 30-->
    <div class="form-group">
            <label for="pregunta30">Pregunta 30: Uso mis dedos para contar y muevo los labios cuando leo (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta30" id="pregunta30_1" value="1" required>
                <label class="form-check-label" for="pregunta30_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta30" id="pregunta30_2" value="2">
                <label class="form-check-label" for="pregunta30_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta30" id="pregunta30_3" value="3">
                <label class="form-check-label" for="pregunta30_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta30" id="pregunta30_4" value="4">
                <label class="form-check-label" for="pregunta30_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta30" id="pregunta30_5" value="5">
                <label class="form-check-label" for="pregunta30_5">5</label>
            </div>
        </div>
        <!--pregunta 31-->
    <div class="form-group">
            <label for="pregunta31">Pregunta 31: No me gusta releer mi trabajo (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta31" id="pregunta31_1" value="1" required>
                <label class="form-check-label" for="pregunta31_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta31" id="pregunta31_2" value="2">
                <label class="form-check-label" for="pregunta31_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta31" id="pregunta31_3" value="3">
                <label class="form-check-label" for="pregunta31_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta31" id="pregunta31_4" value="4">
                <label class="form-check-label" for="pregunta31_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta31" id="pregunta31_5" value="5">
                <label class="form-check-label" for="pregunta31_5">5</label>
            </div>
        </div>
        <!--pregunta 32-->
    <div class="form-group">
            <label for="pregunta32">Pregunta 32: Cuando estoy tratando de recordar algo nuevo, por ejemplo, un numero de telefono, me aydua formarme una imagen mental para lograrlo (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta32" id="pregunta32_1" value="1" required>
                <label class="form-check-label" for="pregunta32_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta32" id="pregunta32_2" value="2">
                <label class="form-check-label" for="pregunta32_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta32" id="pregunta32_3" value="3">
                <label class="form-check-label" for="pregunta32_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta32" id="pregunta32_4" value="4">
                <label class="form-check-label" for="pregunta32_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta32" id="pregunta32_5" value="5">
                <label class="form-check-label" for="pregunta32_5">5</label>
            </div>
        </div>
        <!--pregunta 33-->
    <div class="form-group">
            <label for="pregunta33">Pregunta 33: Para obtener una nota extra, prefiero grabar un informe a escribirlo (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta33" id="pregunta33_1" value="1" required>
                <label class="form-check-label" for="pregunta33_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta33" id="pregunta33_2" value="2">
                <label class="form-check-label" for="pregunta33_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta33" id="pregunta33_3" value="3">
                <label class="form-check-label" for="pregunta33_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta33" id="pregunta33_4" value="4">
                <label class="form-check-label" for="pregunta33_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta33" id="pregunta33_5" value="5">
                <label class="form-check-label" for="pregunta33_5">5</label>
            </div>
        </div>
        <!--pregunta 34-->
    <div class="form-group">
            <label for="pregunta34">Pregunta 34: Fantaseo en clase (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta34" id="pregunta34_1" value="1" required>
                <label class="form-check-label" for="pregunta34_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta34" id="pregunta34_2" value="2">
                <label class="form-check-label" for="pregunta34_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta34" id="pregunta34_3" value="3">
                <label class="form-check-label" for="pregunta34_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta34" id="pregunta34_4" value="4">
                <label class="form-check-label" for="pregunta34_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta34" id="pregunta34_5" value="5">
                <label class="form-check-label" for="pregunta34_5">5</label>
            </div>
        </div>
        <!--pregunta 35-->
    <div class="form-group">
            <label for="pregunta35">Pregunta 35: Para obtener una calificacion extra, prefiero crear un proyecto a escribir un informe (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta35" id="pregunta35_1" value="1" required>
                <label class="form-check-label" for="pregunta35_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta35" id="pregunta35_2" value="2">
                <label class="form-check-label" for="pregunta35_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta35" id="pregunta35_3" value="3">
                <label class="form-check-label" for="pregunta35_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta35" id="pregunta35_4" value="4">
                <label class="form-check-label" for="pregunta35_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta35" id="pregunta35_5" value="5">
                <label class="form-check-label" for="pregunta35_5">5</label>
            </div>
        </div>
        <!--pregunta 36-->
    <div class="form-group">
            <label for="pregunta36">Pregunta 36: Cuando tengo una gran idea, debo escribirla inmediatamente o la olvido con facilidad (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta36" id="pregunta36_1" value="1" required>
                <label class="form-check-label" for="pregunta36_1">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta36" id="pregunta36_2" value="2">
                <label class="form-check-label" for="pregunta36_2">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta36" id="pregunta36_3" value="3">
                <label class="form-check-label" for="pregunta36_3">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta36" id="pregunta36_4" value="4">
                <label class="form-check-label" for="pregunta36_4">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta36" id="pregunta36_5" value="5">
                <label class="form-check-label" for="pregunta36_5">5</label>
            </div>
        </div>
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
