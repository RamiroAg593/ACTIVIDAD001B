<?php
require('conexion.php');
$con = connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];

    $sql = "DELETE FROM carreras WHERE id = '$id'";
    $query = mysqli_query($con, $sql);

    if ($query) {
        echo "<script>alert('Evento eliminado exitosamente'); window.location.href = 'index.php';</script>";
    } else {
        echo "<script>alert('Error al eliminar los datos: " . mysqli_error($con) . "'); window.location.href = 'index.php';</script>";
    }
}
?>
