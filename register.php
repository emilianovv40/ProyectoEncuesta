<!DOCTYPE html>
<html>
<head>
    <title>Registro</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Registro</h2>
        <form action="register.php" method="post" class="mt-3">
            <div class="form-group">
                <label for="tipo_usuario">Tipo de Usuario:</label>
                <select name="tipo_usuario" id="tipo_usuario" class="form-control">
                    <option value="alumno">Alumno</option>
                    <option value="psicologo">Psicólogo</option>
                    <option value="jefe de area">Jefe de Area</option>
                </select>
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" name="correo" id="correo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena" id="contrasena" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nombre_completo">Nombre Completo:</label>
                <input type="text" name="nombre_completo" id="nombre_completo" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>
</body>
</html>

<?php
require_once('db.php'); // Agrega esta línea para incluir la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipo_usuario = $_POST["tipo_usuario"];
    $correo = $_POST["correo"];
    $contrasena = $_POST["contrasena"];
    $nombre_completo = $_POST["nombre_completo"];

    $sql = "INSERT INTO usuarios (tipo_usuario, correo, contrasena, nombre_completo) 
            VALUES ('$tipo_usuario', '$correo', '$contrasena', '$nombre_completo')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error al registrar el usuario: " . mysqli_error($conn);
    }
}
?>
