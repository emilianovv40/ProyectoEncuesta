<?php
session_start();
include 'db.php';
if (!isset($_SESSION["correo"])) {
    header("Location: index.php");
    exit();
}

$correo = $_SESSION["correo"];
echo "Correo del usuario: " . $correo; // Agregar esta línea para verificar el valor del correo

$tipo_usuario = obtenerTipoDeUsuario($correo);

// Resto del código...


function obtenerTipoDeUsuario($correo) {
    global $conn;
    $query = "SELECT tipo_usuario FROM usuarios WHERE correo = '$correo'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    return $row['tipo_usuario'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panel de Control</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body background="img/fondo.jpg" width="500" height="500">
<?php include 'navbar.php'; ?>
    <div class="container mt-5">
        <h2>Bienvenido al Panel de Control</h2>
        <p>Tipo de Usuario: <?php echo ucfirst($tipo_usuario); ?></p>
        <a href="logout.php" class="btn btn-danger">Cerrar Sesión</a>

<!-- Mostrar diferentes tarjetas según el rol del usuario -->
<div class="row mt-5">
    <?php if ($tipo_usuario === "alumno"): ?>
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Test para determinar el Canal de Aprendizaje de Preferencia de Lynn O’Brien</h5>
                    <p class="card-text">Test de 36 Preguntas</p>
                    <a href="test1.php" class="btn btn-primary">Ir al test 36</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Test Estilo de Aprendizaje (Modelo PNL)</h5>
                    <p class="card-text">Test de 40 Preguntas</p>
                    <a href="test2.php" class="btn btn-primary">Ir al test 40</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Cuestionario Honey-Alonso de Estilos de Aprendizaje</h5>
                    <p class="card-text">Test de 80 Preguntas</p>
                    <a href="test3.php" class="btn btn-primary">Ir al test 80</a>
                </div>
            </div>
        </div>
        <!-- Agrega más tarjetas para alumnos aquí si lo deseas -->

    <?php elseif ($tipo_usuario === "psicologo"): ?>
        <div class="col-md-3 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Resultados del Test 36</h5>
                    <p class="card-text">Resultados del Test para determinar el Canal de Aprendizaje de Preferencia de Lynn O’Brien</p>
                    <form action="grafica12.php" method="POST">
                <label for="correo">Ingrese Correo del Usuario:</label>
                <input type="text" name="correo" id="correo">
                <input class="btn btn-primary" type="submit" value="Mostrar Gráfica">
            </form>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Resultado del Test 40</h5>
                    <p class="card-text">Resultados del Test Estilo de Aprendizaje (Modelo PNL)</p>
                    <form action="grafica22.php" method="GET">
                <label for="correo">Ingrese Correo del Usuario:</label>
                <input type="text" name="correo" id="correo">
                <input class="btn btn-primary" type="submit" value="Mostrar Gráfica">
            </form>
                    
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Resultado de Test 80</h5>
                    <p class="card-text">Resultados del Cuestionario Honey-Alonso de Estilos de Aprendizaje</p>
                    <form action="grafica32.php" method="GET">
                <label for="correo">Ingrese Correo del Usuario:</label>
                <input type="text" name="correo" id="correo">
                <input class="btn btn-primary" type="submit" value="Mostrar Gráfica">
            </form>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Registrar Alumno y Psicologo</h5>
                    <p class="card-text"></p>
                    <a href="register_psicologo.php" class="btn btn-primary">Registrar Usuarios</a>
                </div>
            </div>
        </div>
        
        <!-- Agrega más tarjetas para psicólogos aquí si lo deseas -->

    <?php elseif ($tipo_usuario === "jefe de area"): ?>
        <div class="col-md-3 mt-4">
        <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Resultados del Test 36</h5>
                    <p class="card-text">Resultados del Test para determinar el Canal de Aprendizaje de Preferencia de Lynn O’Brien</p>
                    <form action="grafica12.php" method="POST">
                <label for="correo">Ingrese Correo del Usuario:</label>
                <input type="text" name="correo" id="correo">
                <input class="btn btn-primary" type="submit" value="Mostrar Gráfica">
            </form>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-4">
        <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Resultado del Test 40</h5>
                    <p class="card-text">Resultados del Test Estilo de Aprendizaje (Modelo PNL)</p>
                    <form action="grafica22.php" method="GET">
                <label for="correo">Ingrese Correo del Usuario:</label>
                <input type="text" name="correo" id="correo">
                <input class="btn btn-primary" type="submit" value="Mostrar Gráfica">
            </form>
                    
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-4">
        <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Resultado de Test 80</h5>
                    <p class="card-text">Resultados del Cuestionario Honey-Alonso de Estilos de Aprendizaje</p>
                    <form action="grafica32.php" method="GET">
                <label for="correo">Ingrese Correo del Usuario:</label>
                <input type="text" name="correo" id="correo">
                <input class="btn btn-primary" type="submit" value="Mostrar Gráfica">
            </form>
                </div>
            </div>
        </div>
        <div class="col-md-3 mt-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Registrar Alumno y Psicologo</h5>
                    <p class="card-text"></p>
                    <a href="register.php" class="btn btn-primary">Registrar Usuarios</a>
                </div>
            </div>
        </div>
    <?php else: ?>
        <!-- Si el tipo de usuario no coincide con ninguna de las opciones anteriores, muestra un mensaje de error -->
        <div class="col-md-12 mt-4">
            <div class="alert alert-danger" role="alert">
                Tipo de usuario no válido. Por favor, contáctese con el administrador.
            </div>
        </div>
    <?php endif; ?>
</div>

    </div>

    <!-- Bootstrap JS y jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
