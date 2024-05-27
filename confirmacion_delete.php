<?php
require('conexion.php');
$con = connection();

$id = $_GET['id'];

$sql = "SELECT * FROM carreras WHERE id = '$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Confirmación de Eliminación</title>
</head>
<body>
    <div class="usuarios-form register">
        <form action="delete.php" method="POST">
            <h2>Eliminar Evento</h2>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">

            <p>¿Está seguro de que desea eliminar el evento <strong><?= $row['nombreEvento'] ?></strong>?</p>

            <button type="submit" class="button">Sí, eliminar</button>

            <a href="formulario2.php" class="button">No, volver</a>
        </form>
    </div>
</body>
</html>

