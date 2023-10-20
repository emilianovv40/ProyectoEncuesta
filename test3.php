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
$sql_verificar_encuesta = "SELECT COUNT(*) as total FROM test80 WHERE id_usuario = $id_usuario";
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
        $pregunta41 = $_POST['pregunta41'];
        $pregunta42 = $_POST['pregunta42'];
        $pregunta43 = $_POST['pregunta43'];
        $pregunta44 = $_POST['pregunta44'];
        $pregunta45 = $_POST['pregunta45'];
        $pregunta46 = $_POST['pregunta46'];
        $pregunta47 = $_POST['pregunta47'];
        $pregunta48 = $_POST['pregunta48'];
        $pregunta49 = $_POST['pregunta49'];
        $pregunta50 = $_POST['pregunta50'];
        $pregunta51 = $_POST['pregunta51'];
        $pregunta52 = $_POST['pregunta52'];
        $pregunta53 = $_POST['pregunta53'];
        $pregunta54 = $_POST['pregunta54'];
        $pregunta55 = $_POST['pregunta55'];
        $pregunta56 = $_POST['pregunta56'];
        $pregunta57 = $_POST['pregunta57'];
        $pregunta58 = $_POST['pregunta58'];
        $pregunta59 = $_POST['pregunta59'];
        $pregunta60 = $_POST['pregunta60'];
        $pregunta61 = $_POST['pregunta61'];
        $pregunta62 = $_POST['pregunta62'];
        $pregunta63 = $_POST['pregunta63'];
        $pregunta64 = $_POST['pregunta64'];
        $pregunta65 = $_POST['pregunta65'];
        $pregunta66 = $_POST['pregunta66'];
        $pregunta67 = $_POST['pregunta67'];
        $pregunta68 = $_POST['pregunta68'];
        $pregunta69 = $_POST['pregunta69'];
        $pregunta70 = $_POST['pregunta70'];
        $pregunta71 = $_POST['pregunta71'];
        $pregunta72 = $_POST['pregunta72'];
        $pregunta73 = $_POST['pregunta73'];
        $pregunta74 = $_POST['pregunta74'];
        $pregunta75 = $_POST['pregunta75'];
        $pregunta76 = $_POST['pregunta76'];
        $pregunta77 = $_POST['pregunta77'];
        $pregunta78 = $_POST['pregunta78'];
        $pregunta79 = $_POST['pregunta79'];
        $pregunta80 = $_POST['pregunta80'];
        
        

        // Almacenar las respuestas en la base de datos
        $sql = "INSERT INTO test80 (id_usuario, tipo_pregunta, respuesta) VALUES 
                ('$id_usuario', 'pragmatico', '$pregunta1'),
                ('$id_usuario', 'teorico', '$pregunta2'),
                ('$id_usuario', 'activo', '$pregunta3'),
                ('$id_usuario', 'teorico', '$pregunta4'),
                ('$id_usuario', 'activo', '$pregunta5'),
                ('$id_usuario', 'teorico', '$pregunta6'),
                ('$id_usuario', 'activo', '$pregunta7'),
                ('$id_usuario', 'pragmatico', '$pregunta8'),
                ('$id_usuario', 'activo', '$pregunta9'),
                ('$id_usuario', 'reflexivo', '$pregunta10'),
                ('$id_usuario', 'teorico', '$pregunta11'),
                ('$id_usuario', 'pragmatico', '$pregunta12'),
                ('$id_usuario', 'activo', '$pregunta13'),
                ('$id_usuario', 'pragmatico', '$pregunta14'),
                ('$id_usuario', 'teorico', '$pregunta15'),
                ('$id_usuario', 'reflexivo', '$pregunta16'),
                ('$id_usuario', 'teorico', '$pregunta17'),
                ('$id_usuario', 'reflexivo', '$pregunta18'),
                ('$id_usuario', 'reflexivo', '$pregunta19'),
                ('$id_usuario', 'activo', '$pregunta20'),
                ('$id_usuario', 'teorico', '$pregunta21'),
                ('$id_usuario', 'pragmatico', '$pregunta22'),
                ('$id_usuario', 'teorico', '$pregunta23'),
                ('$id_usuario', 'pragmatico', '$pregunta24'),
                ('$id_usuario', 'teorico', '$pregunta25'),
                ('$id_usuario', 'activo', '$pregunta26'),
                ('$id_usuario', 'activo', '$pregunta27'),
                ('$id_usuario', 'reflexivo', '$pregunta28'),
                ('$id_usuario', 'teorico', '$pregunta29'),
                ('$id_usuario', 'pragmatico', '$pregunta30'),
                ('$id_usuario', 'reflexivo', '$pregunta31'),
                ('$id_usuario', 'reflexivo', '$pregunta32'),
                ('$id_usuario', 'teorico', '$pregunta33'),
                ('$id_usuario', 'reflexivo', '$pregunta34'),
                ('$id_usuario', 'activo', '$pregunta35'),
                ('$id_usuario', 'reflexivo', '$pregunta36'),
                ('$id_usuario', 'activo', '$pregunta37'),
                ('$id_usuario', 'pragmatico', '$pregunta38'),
                ('$id_usuario', 'reflexivo', '$pregunta39'),
                ('$id_usuario', 'pragmatico', '$pregunta40'),
                ('$id_usuario', 'activo', '$pregunta41'),
                ('$id_usuario', 'reflexivo', '$pregunta42'),
                ('$id_usuario', 'activo', '$pregunta43'),
                ('$id_usuario', 'reflexivo', '$pregunta44'),
                ('$id_usuario', 'teorico', '$pregunta45'),
                ('$id_usuario', 'activo', '$pregunta46'),
                ('$id_usuario', 'pragmatico', '$pregunta47'),
                ('$id_usuario', 'activo', '$pregunta48'),
                ('$id_usuario', 'reflexivo', '$pregunta49'),
                ('$id_usuario', 'teorico', '$pregunta50'),
                ('$id_usuario', 'activo', '$pregunta51'),
                ('$id_usuario', 'pragmatico', '$pregunta52'),
                ('$id_usuario', 'pragmatico', '$pregunta53'),
                ('$id_usuario', 'teorico', '$pregunta54'),
                ('$id_usuario', 'reflexivo', '$pregunta55'),
                ('$id_usuario', 'pragmatico', '$pregunta56'),
                ('$id_usuario', 'pragmatico', '$pregunta57'),
                ('$id_usuario', 'reflexivo', '$pregunta58'),
                ('$id_usuario', 'pragmatico', '$pregunta59'),
                ('$id_usuario', 'teorico', '$pregunta60'),
                ('$id_usuario', 'activo', '$pregunta61'),
                ('$id_usuario', 'pragmatico', '$pregunta62'),
                ('$id_usuario', 'reflexivo', '$pregunta63'),
                ('$id_usuario', 'teorico', '$pregunta64'),
                ('$id_usuario', 'reflexivo', '$pregunta65'),
                ('$id_usuario', 'teorico', '$pregunta66'),
                ('$id_usuario', 'activo', '$pregunta67'),
                ('$id_usuario', 'pragmatico', '$pregunta68'),
                ('$id_usuario', 'reflexivo', '$pregunta69'),
                ('$id_usuario', 'reflexivo', '$pregunta70'),
                ('$id_usuario', 'teorico', '$pregunta71'),
                ('$id_usuario', 'pragmatico', '$pregunta72'),
                ('$id_usuario', 'pragmatico', '$pregunta73'),
                ('$id_usuario', 'activo', '$pregunta74'),
                ('$id_usuario', 'activo', '$pregunta75'),
                ('$id_usuario', 'pragmatico', '$pregunta76'),
                ('$id_usuario', 'activo', '$pregunta77'),
                ('$id_usuario', 'teorico', '$pregunta78'),
                ('$id_usuario', 'reflexivo', '$pregunta79'),
                ('$id_usuario', 'teorico', '$pregunta80')";
        if (mysqli_query($conn, $sql)) {
            header("Location: grafica3.php");
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
    <title>Encuesta - Test 3</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include 'navbar.php'; ?>

<div class="container mt-5">
    <h2>Encuesta - Test 3</h2>
    <?php if ($encuesta_realizada) : ?>
        <div class="alert alert-info">
            Ya se realizó esta encuesta.
        </div>
    <?php else : ?>
        <form action="test3.php" method="post" class="mt-3">
        <div class="form-group">
            <label for="pregunta1">Pregunta 1: Tengo fama de decir lo que pienso y sin rodeos (1-5)</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta1" id="pregunta1_1" value="1" required>
                <label class="form-check-label" for="pregunta1_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta1" id="pregunta1_2" value="0">
                <label class="form-check-label" for="pregunta1_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta2">Pregunta 2: Estoy seguro/a de lo que es bueno y lo que es malo, lo que esta bien y lo que esta mal (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta2" id="pregunta2_1" value="1" required>
                <label class="form-check-label" for="pregunta2_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta2" id="pregunta2_2" value="0">
                <label class="form-check-label" for="pregunta2_2">-</label>
            </div>
        </div>
        <div class="form-group">
            <label for="pregunta3">Pregunta 3: Muchas veces actuo sin mirar las consecuencias (1-5)</label><br>
            <!-- Agregar el checklist de la pregunta 3 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta3" id="pregunta3_1" value="1" required>
                <label class="form-check-label" for="pregunta3_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta3" id="pregunta3_2" value="0">
                <label class="form-check-label" for="pregunta3_2">-</label>
            </div>
        </div>
        <div class="form-group">
    <label for="pregunta4">Pregunta 4: Normalmente trato de resolver los problemas metódicamente y paso a
paso.</label><br>
    <!-- Agregar el checklist de la pregunta 4 de manera similar -->
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="pregunta4" id="pregunta4_1" value="1" required>
        <label class="form-check-label" for="pregunta4_1">+</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="pregunta4" id="pregunta4_2" value="0">
        <label class="form-check-label" for="pregunta4_2">-</label>
    </div>
    <!--pregunta 2-->
    <div class="form-group">
            <label for="pregunta5">Pregunta 5: Creo que los formalismos coartan y limitan la actuación libre de las
personas.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta5" id="pregunta5_1" value="1" required>
                <label class="form-check-label" for="pregunta5_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta5" id="pregunta5_2" value="0">
                <label class="form-check-label" for="pregunta5_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta6">Pregunta 6: Me interesa saber cuáles son los sistemas de valores de los demás y
con qué criterios actúan.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta6" id="pregunta6_1" value="1" required>
                <label class="form-check-label" for="pregunta6_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta6" id="pregunta6_2" value="0">
                <label class="form-check-label" for="pregunta6_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta7">Pregunta 7:  Pienso que el actuar intuitivamente puede ser siempre tan válido como 
 actuar reflexivamente</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta7" id="pregunta7_1" value="1" required>
                <label class="form-check-label" for="pregunta7_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta7" id="pregunta7_2" value="0">
                <label class="form-check-label" for="pregunta7_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta8">Pregunta 8:  Creo que lo más importante es que las cosas funcionen.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta8" id="pregunta8_1" value="1" required>
                <label class="form-check-label" for="pregunta8_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta8" id="pregunta8_2" value="0">
                <label class="form-check-label" for="pregunta8_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta9">Pregunta 9: . Procuro estar al tanto de lo que ocurre aquí y ahora. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta9" id="pregunta9_1" value="1" required>
                <label class="form-check-label" for="pregunta9_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta9" id="pregunta9_2" value="0">
                <label class="form-check-label" for="pregunta9_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta10">Pregunta 10: Disfruto cuando tengo tiempo para preparar mi trabajo y realizarlo a 
 conciencia.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta10" id="pregunta10_1" value="1" required>
                <label class="form-check-label" for="pregunta10_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta10" id="pregunta10_2" value="0">
                <label class="form-check-label" for="pregunta10_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta11">Pregunta 11: Estoy a gusto siguiendo un orden en las comidas, en el estudio, 
 haciendo ejercicio regularmente.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta11" id="pregunta11_1" value="1" required>
                <label class="form-check-label" for="pregunta11_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta11" id="pregunta11_2" value="0">
                <label class="form-check-label" for="pregunta11_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta12">Pregunta 12:  Cuando escucho una nueva idea enseguida comienzo a pensar cómo 
 ponerla en práctica.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta12" id="pregunta12_1" value="1" required>
                <label class="form-check-label" for="pregunta12_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta12" id="pregunta12_2" value="0">
                <label class="form-check-label" for="pregunta12_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta13">Pregunta 13:  Prefiero las ideas originales y novedosas aunque no sean prácticas.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta13" id="pregunta13_1" value="1" required>
                <label class="form-check-label" for="pregunta13_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta13" id="pregunta13_2" value="0">
                <label class="form-check-label" for="pregunta13_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta14">Pregunta 14: Admito y me ajusto a las normas sólo si me sirven para lograr mis 
 objetivos.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta14" id="pregunta14_1" value="1" required>
                <label class="form-check-label" for="pregunta14_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta14" id="pregunta14_2" value="0">
                <label class="form-check-label" for="pregunta14_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta15">Pregunta 15:  Normalmente encajo bien con personas reflexivas, y me cuesta 
 sintonizar con personas demasiado espontáneas, imprevisibles. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta15" id="pregunta15_1" value="1" required>
                <label class="form-check-label" for="pregunta15_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta15" id="pregunta15_2" value="0">
                <label class="form-check-label" for="pregunta15_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta16">Pregunta 16:  Escucho con más frecuencia que hablo.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta16" id="pregunta16_1" value="1" required>
                <label class="form-check-label" for="pregunta16_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta16" id="pregunta16_2" value="0">
                <label class="form-check-label" for="pregunta16_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta17">Pregunta 17: Prefiero las cosas estructuradas a las desordenadas. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta17" id="pregunta17_1" value="1" required>
                <label class="form-check-label" for="pregunta17_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta17" id="pregunta17_2" value="0">
                <label class="form-check-label" for="pregunta17_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta18">Pregunta 18:  Cuando poseo cualquier información, trato de interpretarla bien antes de 
 manifestar alguna conclusión. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta18" id="pregunta18_1" value="1" required>
                <label class="form-check-label" for="pregunta18_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta18" id="pregunta18_2" value="0">
                <label class="form-check-label" for="pregunta18_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta19">Pregunta 19: Antes de hacer algo estudio con cuidado sus ventajas e inconvenientes</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta19" id="pregunta19_1" value="1" required>
                <label class="form-check-label" for="pregunta19_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta19" id="pregunta19_2" value="0">
                <label class="form-check-label" for="pregunta19_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta20">Pregunta 20:  Me entusiasmo con el reto de hacer algo nuevo y diferente. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta20" id="pregunta20_1" value="1" required>
                <label class="form-check-label" for="pregunta20_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta20" id="pregunta20_2" value="0">
                <label class="form-check-label" for="pregunta20_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta21">Pregunta 21:  Casi siempre procuro ser coherente con mis criterios y sistemas de 
 valores. Tengo principios y los sigo. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta21" id="pregunta21_1" value="1" required>
                <label class="form-check-label" for="pregunta21_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta21" id="pregunta21_2" value="0">
                <label class="form-check-label" for="pregunta21_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta22">Pregunta 22: Cuando hay una discusión no me gusta ir con rodeos</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta22" id="pregunta22_1" value="1" required>
                <label class="form-check-label" for="pregunta22_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta22" id="pregunta22_2" value="0">
                <label class="form-check-label" for="pregunta22_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta23">Pregunta 23: Me disgusta implicarme afectivamente en el ambiente de la escuela. 
 Prefiero mantener relaciones distantes.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta23" id="pregunta23_1" value="1" required>
                <label class="form-check-label" for="pregunta23_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta23" id="pregunta23_2" value="0">
                <label class="form-check-label" for="pregunta23_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta24">Pregunta 24: Me gustan más las personas realistas y concretas que las teóricas.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta24" id="pregunta24_1" value="1" required>
                <label class="form-check-label" for="pregunta24_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta24" id="pregunta24_2" value="0">
                <label class="form-check-label" for="pregunta24_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta25">Pregunta 25:  Me cuesta ser creativo/a, romper estructuras.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta25" id="pregunta25_1" value="1" required>
                <label class="form-check-label" for="pregunta25_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta25" id="pregunta25_2" value="0">
                <label class="form-check-label" for="pregunta25_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta26">Pregunta 26: Me siento a gusto con personas espontáneas y divertidas. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta26" id="pregunta26_1" value="1" required>
                <label class="form-check-label" for="pregunta26_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta26" id="pregunta26_2" value="0">
                <label class="form-check-label" for="pregunta26_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta27">Pregunta 27: La mayoría de las veces expreso abiertamente cómo me siento.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta27" id="pregunta27_1" value="1" required>
                <label class="form-check-label" for="pregunta27_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta27" id="pregunta27_2" value="0">
                <label class="form-check-label" for="pregunta27_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta28">Pregunta 28:  Me gusta analizar y dar vueltas a las cosas.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta28" id="pregunta28_1" value="1" required>
                <label class="form-check-label" for="pregunta28_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta28" id="pregunta28_2" value="0">
                <label class="form-check-label" for="pregunta28_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta29">Pregunta 29: Me molesta que la gente no se tome en serio las cosas. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta29" id="pregunta29_1" value="1" required>
                <label class="form-check-label" for="pregunta29_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta29" id="pregunta29_2" value="0">
                <label class="form-check-label" for="pregunta29_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta30">Pregunta 30:  Me atrae experimentar y practicar las últimas técnicas y novedades.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta30" id="pregunta30_1" value="1" required>
                <label class="form-check-label" for="pregunta30_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta30" id="pregunta30_2" value="0">
                <label class="form-check-label" for="pregunta30_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta31">Pregunta 31: Soy cauteloso/a a la hora de sacar conclusiones.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta31" id="pregunta31_1" value="1" required>
                <label class="form-check-label" for="pregunta31_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta31" id="pregunta31_2" value="0">
                <label class="form-check-label" for="pregunta31_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta32">Pregunta 32: Prefiero contar con el mayor número de fuentes de información. Cuantos más datos reúna para reflexionar, mejor.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta32" id="pregunta32_1" value="1" required>
                <label class="form-check-label" for="pregunta32_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta32" id="pregunta32_2" value="0">
                <label class="form-check-label" for="pregunta32_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta33">Pregunta 33: Tiendo a ser perfeccionista. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta33" id="pregunta33_1" value="1" required>
                <label class="form-check-label" for="pregunta33_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta33" id="pregunta33_2" value="0">
                <label class="form-check-label" for="pregunta33_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta34">Pregunta 34: Prefiero oír las opiniones de los demás antes de exponer la mía.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta34" id="pregunta34_1" value="1" required>
                <label class="form-check-label" for="pregunta34_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta34" id="pregunta34_2" value="0">
                <label class="form-check-label" for="pregunta34_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta35">Pregunta 35: Me gusta afrontar la vida espontáneamente y no tener que planificar todo 
 previamente.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta35" id="pregunta35_1" value="1" required>
                <label class="form-check-label" for="pregunta35_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta35" id="pregunta35_2" value="0">
                <label class="form-check-label" for="pregunta35_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta36">Pregunta 36: En las discusiones me gusta observar cómo actúan los demás participantes.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta36" id="pregunta36_1" value="1" required>
                <label class="form-check-label" for="pregunta36_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta36" id="pregunta36_2" value="0">
                <label class="form-check-label" for="pregunta36_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta37">Pregunta 37:  Me siento incómodo/a con las personas calladas y demasiado analíticas. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta37" id="pregunta37_1" value="1" required>
                <label class="form-check-label" for="pregunta37_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta37" id="pregunta37_2" value="0">
                <label class="form-check-label" for="pregunta37_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta38">Pregunta 38: Juzgo con frecuencia las ideas de los demás por su valor práctico. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta38" id="pregunta38_1" value="1" required>
                <label class="form-check-label" for="pregunta38_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta38" id="pregunta38_2" value="0">
                <label class="form-check-label" for="pregunta38_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta39">Pregunta 39: Me agobio si me obligan a acelerar mucho el trabajo para cumplir un 
 plazo.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta39" id="pregunta39_1" value="1" required>
                <label class="form-check-label" for="pregunta39_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta39" id="pregunta39_2" value="0">
                <label class="form-check-label" for="pregunta39_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta40">Pregunta 40:  En las reuniones apoyo las ideas prácticas y realistas.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta40" id="pregunta40_1" value="1" required>
                <label class="form-check-label" for="pregunta40_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta40" id="pregunta40_2" value="0">
                <label class="form-check-label" for="pregunta40_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta41">Pregunta 41: Es mejor gozar del momento presente que deleitarse pensando en el 
 pasado o en el futuro. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta41" id="pregunta41_1" value="1" required>
                <label class="form-check-label" for="pregunta41_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta41" id="pregunta41_2" value="0">
                <label class="form-check-label" for="pregunta41_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta42">Pregunta 42: Me molestan las personas que siempre desean apresurar las cosas. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta42" id="pregunta42_1" value="1" required>
                <label class="form-check-label" for="pregunta42_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta42" id="pregunta42_2" value="0">
                <label class="form-check-label" for="pregunta42_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta43">Pregunta 43:  Aporto ideas nuevas y espontáneas en los grupos de discusión. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta43" id="pregunta43_1" value="1" required>
                <label class="form-check-label" for="pregunta43_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta43" id="pregunta43_2" value="0">
                <label class="form-check-label" for="pregunta43_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta44">Pregunta 44:  Pienso que son más consistentes las decisiones fundamentadas en un 
 minucioso análisis que las basadas en la intuición. 
</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta44" id="pregunta44_1" value="1" required>
                <label class="form-check-label" for="pregunta44_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta44" id="pregunta44_2" value="0">
                <label class="form-check-label" for="pregunta44_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta45">Pregunta 45: Detecto frecuentemente la inconsistencia y puntos débiles en las 
 argumentaciones de los demás. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta45" id="pregunta45_1" value="1" required>
                <label class="form-check-label" for="pregunta45_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta45" id="pregunta45_2" value="0">
                <label class="form-check-label" for="pregunta45_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta46">Pregunta 46:  Creo que es preciso saltarse las normas muchas más veces que 
 cumplirlas.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta46" id="pregunta46_1" value="1" required>
                <label class="form-check-label" for="pregunta46_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta46" id="pregunta46_2" value="0">
                <label class="form-check-label" for="pregunta46_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta47">Pregunta 47: A menudo caigo en la cuenta de otras formas mejores y más prácticas 
 de hacer las cosas. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta47" id="pregunta47_1" value="1" required>
                <label class="form-check-label" for="pregunta47_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta47" id="pregunta47_2" value="0">
                <label class="form-check-label" for="pregunta47_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta48">Pregunta 48: En conjunto hablo más que escucho</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta48" id="pregunta48_1" value="1" required>
                <label class="form-check-label" for="pregunta48_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta48" id="pregunta48_2" value="0">
                <label class="form-check-label" for="pregunta48_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta49">Pregunta 49: Prefiero distanciarme de los hechos y observarlos desde otras 
 perspectivas. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta49" id="pregunta49_1" value="1" required>
                <label class="form-check-label" for="pregunta49_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta49" id="pregunta49_2" value="0">
                <label class="form-check-label" for="pregunta49_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta50">Pregunta 50: Estoy convencido/a que debe imponerse la lógica y el razonamiento.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta50" id="pregunta50_1" value="1" required>
                <label class="form-check-label" for="pregunta50_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta50" id="pregunta50_2" value="0">
                <label class="form-check-label" for="pregunta50_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta51">Pregunta 51: Me gusta buscar nuevas experiencias. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta51" id="pregunta51_1" value="1" required>
                <label class="form-check-label" for="pregunt51_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta51" id="pregunta51_2" value="0">
                <label class="form-check-label" for="pregunta51_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta52">Pregunta 52: Me gusta experimentar y aplicar las cosas. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta52" id="pregunta52_1" value="1" required>
                <label class="form-check-label" for="pregunta52_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta52" id="pregunta52_2" value="0">
                <label class="form-check-label" for="pregunta52_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta53">Pregunta 53: Pienso que debemos llegar pronto al grano, al meollo de los temas.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta53" id="pregunta53_1" value="1" required>
                <label class="form-check-label" for="pregunta53_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta53" id="pregunta53_2" value="0">
                <label class="form-check-label" for="pregunta53_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta54">Pregunta 54: Siempre trato de conseguir conclusiones e ideas claras. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta54" id="pregunta54_1" value="1" required>
                <label class="form-check-label" for="pregunta54_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta54" id="pregunta54_2" value="0">
                <label class="form-check-label" for="pregunta54_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta55">Pregunta 55: Prefiero discutir cuestiones concretas y no perder el tiempo con pláticas 
 superficiales. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta55" id="pregunta55_1" value="1" required>
                <label class="form-check-label" for="pregunta55_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta55" id="pregunta55_2" value="0">
                <label class="form-check-label" for="pregunta55_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta56">Pregunta 56: Me impaciento cuando me dan explicaciones irrelevantes e incoherentes.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta56" id="pregunta56_1" value="1" required>
                <label class="form-check-label" for="pregunta56_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta56" id="pregunta56_2" value="0">
                <label class="form-check-label" for="pregunta56_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta57">Pregunta 57: Compruebo antes si las cosas funcionan realmente. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta57" id="pregunta57_1" value="1" required>
                <label class="form-check-label" for="pregunta57_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta57" id="pregunta57_2" value="0">
                <label class="form-check-label" for="pregunta57_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta58">Pregunta 58: Hago varios borradores antes de la redacción definitiva de un trabajo59</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta58" id="pregunta58_1" value="1" required>
                <label class="form-check-label" for="pregunta58_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta58" id="pregunta58_2" value="0">
                <label class="form-check-label" for="pregunta58_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta59">Pregunta 59: Soy consciente de que en las discusiones ayudo a mantener a los60demás centrados en el tema, evitando divagaciones.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta59" id="pregunta59_1" value="1" required>
                <label class="form-check-label" for="pregunta59_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta59" id="pregunta59_2" value="0">
                <label class="form-check-label" for="pregunta59_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta60">Pregunta 60: Observo que, con frecuencia, soy uno/a de los/as más objetivos/as y desapasionados/as en las discusiones. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta60" id="pregunta60_1" value="1" required>
                <label class="form-check-label" for="pregunta60_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta60" id="pregunta60_2" value="0">
                <label class="form-check-label" for="pregunta60_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta61">Pregunta 61:  Cuando algo va mal, le quito importancia y trato de hacerlo mejor62</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta61" id="pregunta61_1" value="1" required>
                <label class="form-check-label" for="pregunta61_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta61" id="pregunta61_2" value="0">
                <label class="form-check-label" for="pregunta61_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta62">Pregunta 62: Rechazo ideas originales y espontáneas si no las veo prácticas.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta62" id="pregunta62_1" value="1" required>
                <label class="form-check-label" for="pregunta62_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta62" id="pregunta62_2" value="0">
                <label class="form-check-label" for="pregunta62_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta63">Pregunta 63: Me gusta sopesar diversas alternativas antes de tomar una decisión.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta63" id="pregunta63_1" value="1" required>
                <label class="form-check-label" for="pregunta63_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta63" id="pregunta63_2" value="0">
                <label class="form-check-label" for="pregunta63_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta64">Pregunta 64: Con frecuencia miro hacia delante para prever el futuro.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta64" id="pregunta64_1" value="1" required>
                <label class="form-check-label" for="pregunta64_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta64" id="pregunta64_2" value="0">
                <label class="form-check-label" for="pregunta64_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta65">Pregunta 65: En los debates y discusiones prefiero desempeñar un papel secundario antes que ser el/la líder o el/la que más participa.</label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta65" id="pregunta65_1" value="1" required>
                <label class="form-check-label" for="pregunta65_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta65" id="pregunta65_2" value="0">
                <label class="form-check-label" for="pregunta65_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta66">Pregunta 66: Me molestan las personas que no actúan con lógica. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta66" id="pregunta66_1" value="1" required>
                <label class="form-check-label" for="pregunta66_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta66" id="pregunta66_2" value="0">
                <label class="form-check-label" for="pregunta66_2">-</label>
            </div>
        </div>
         <!--pregunta 2-->
         <div class="form-group">
            <label for="pregunta67">Pregunta 67: Me resulta incómodo tener que planificar y prever las cosas.  </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta67" id="pregunta67_1" value="1" required>
                <label class="form-check-label" for="pregunta67_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta67" id="pregunta67_2" value="0">
                <label class="form-check-label" for="pregunta67_2">-</label>
            </div>
        </div>
         <!--pregunta 2-->
         <div class="form-group">
            <label for="pregunta68">Pregunta 68:  Creo que el fin justifica los medios en muchos casos.  </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta68" id="pregunta68_1" value="1" required>
                <label class="form-check-label" for="pregunta68_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta68" id="pregunta68_2" value="0">
                <label class="form-check-label" for="pregunta68_2">-</label>
            </div>
        </div>
         <!--pregunta 2-->
         <div class="form-group">
            <label for="pregunta69">Pregunta 69:  Suelo reflexionar sobre los asuntos y problemas. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta69" id="pregunta69_1" value="1" required>
                <label class="form-check-label" for="pregunta69_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta69" id="pregunta69_2" value="0">
                <label class="form-check-label" for="pregunta69_2">-</label>
            </div>
        </div>
         <!--pregunta 2-->
         <div class="form-group">
            <label for="pregunta70">Pregunta 70: El trabajar a conciencia me llena de satisfacción y orgullo.  </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta70" id="pregunta70_1" value="1" required>
                <label class="form-check-label" for="pregunta70_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta70" id="pregunta70_2" value="0">
                <label class="form-check-label" for="pregunta70_2">-</label>
            </div>
        </div>
         <!--pregunta 2-->
         <div class="form-group">
            <label for="pregunta71">Pregunta 71: Ante los acontecimientos trato de descubrir los principios y teorías en 
 que se basan </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta71" id="pregunta71_1" value="1" required>
                <label class="form-check-label" for="pregunta71_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta71" id="pregunta71_2" value="0">
                <label class="form-check-label" for="pregunta71_2">-</label>
            </div>
        </div>
         <!--pregunta 2-->
         <div class="form-group">
            <label for="pregunta72">Pregunta 72: Con tal de conseguir el objetivo que pretendo soy capaz de herir 
 sentimientos ajenos.. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta72" id="pregunta72_1" value="1" required>
                <label class="form-check-label" for="pregunta72_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta72" id="pregunta72_2" value="0">
                <label class="form-check-label" for="pregunta72_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta73">Pregunta 73:No me importa hacer todo lo necesario para que sea efectivo mi trabajo.  </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta73" id="pregunta73_1" value="1" required>
                <label class="form-check-label" for="pregunta73_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta73" id="pregunta73_2" value="0">
                <label class="form-check-label" for="pregunta73_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta74">Pregunta 74:  Con frecuencia soy una de las personas que más anima las fiestas. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta74" id="pregunta74_1" value="1" required>
                <label class="form-check-label" for="pregunta74_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta74" id="pregunta74_2" value="0">
                <label class="form-check-label" for="pregunta74_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta75">Pregunta 75: Me aburro enseguida con el trabajo metódico y minucioso. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta75" id="pregunta75_1" value="1" required>
                <label class="form-check-label" for="pregunta75_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta75" id="pregunta75_2" value="0">
                <label class="form-check-label" for="pregunta75_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta76">Pregunta 76: La gente con frecuencia cree que soy poco sensible a sus sentimientos. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta76" id="pregunta76_1" value="1" required>
                <label class="form-check-label" for="pregunta76_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta76" id="pregunta76_2" value="0">
                <label class="form-check-label" for="pregunta76_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta77">Pregunta 77: Suelo dejarme llevar por mis intuiciones. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta77" id="pregunta77_1" value="1" required>
                <label class="form-check-label" for="pregunta77_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta77" id="pregunta77_2" value="0">
                <label class="form-check-label" for="pregunta77_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta78">Pregunta 78: Si trabajo en grupo procuro que se siga un método y un orden. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta78" id="pregunta78_1" value="1" required>
                <label class="form-check-label" for="pregunta78_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta78" id="pregunta78_2" value="0">
                <label class="form-check-label" for="pregunta78_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta79">Pregunta 79: Con frecuencia me interesa averiguar lo que piensa la gente. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta79" id="pregunta79_1" value="1" required>
                <label class="form-check-label" for="pregunta79_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta79" id="pregunta79_2" value="0">
                <label class="form-check-label" for="pregunta79_2">-</label>
            </div>
        </div>
        <!--pregunta 2-->
        <div class="form-group">
            <label for="pregunta80">Pregunta 80: Esquivo los temas subjetivos, ambiguos y poco claros. </label><br>
            <!-- Agregar el checklist de la pregunta 2 de manera similar -->
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta80" id="pregunta80_1" value="1" required>
                <label class="form-check-label" for="pregunta80_1">+</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="pregunta80" id="pregunta80_2" value="0">
                <label class="form-check-label" for="pregunta80_2">-</label>
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
