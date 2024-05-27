<?php
require ('conexion.php');
$con = connection();

//Procesar los datos del formulario

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST["id"];
    $nombre = $_POST["nombreEvento"];
    $fecha = $_POST["fechaEvento"];
    $hora = $_POST["horaEvento"];
    $lugar = $_POST["lugarEvento"];
    $distancia = $_POST["distancia"];
    $categoria = $_POST["categoria"];
    $descripcion = $_POST["descripcion"];

}

$sql = "INSERT INTO carreras (id, nombreEvento, fechaEvento, horaEvento, lugarEvento, distancia, categoria, descripcion)
 VALUES ('$id', '$nombre', '$fecha', '$hora', '$lugar', '$distancia', '$categoria', '$descripcion')";

$query = mysqli_query($con, $sql);

if ($query) {
    $mensaje = "Usuario registrado correctamente";
} else {
    $mensaje = "Error al insertar los datos: " . mysqli_error($con);
}

if($query) {
    header ("location: index.php");
};

?>