<?php
require('conexion.php');
$con = connection();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_original = $_POST["id_original"];
    $id_nuevo = $_POST["id"];
    $nombreEvento = $_POST["nombreEvento"];
    $fechaEvento = $_POST["fechaEvento"];
    $horaEvento = $_POST["horaEvento"];
    $lugarEvento = $_POST["lugarEvento"];
    $distancia = $_POST["distancia"];
    $categoria = $_POST["categoria"];
    $descripcion = $_POST["descripcion"];

    $sql = "UPDATE carreras SET 
            id = '$id_nuevo', 
            nombreEvento = '$nombreEvento', 
            fechaEvento = '$fechaEvento', 
            horaEvento = '$horaEvento', 
            lugarEvento = '$lugarEvento', 
            distancia = '$distancia', 
            categoria = '$categoria', 
            descripcion = '$descripcion' 
            WHERE id = '$id_original'";

    $query = mysqli_query($con, $sql);

    if ($query) {
        header("Location: index.php");
    } else {
        echo "Error al actualizar los datos: " . mysqli_error($con);
    }
}
?>