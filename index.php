<?php
require('conexion.php');
$con = connection();

$sql = "SELECT COUNT(*) AS totalEventos FROM carreras";
$query = mysqli_query($con, $sql);
$result = mysqli_fetch_assoc($query);
$totalEventos = $result['totalEventos'];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylehtml1.css">
    
    <title>Eventos Atléticos</title>
    


</head>

<body>
    <div class="container">
        <img src="IMAGENES/grupo1.png" alt="Imagen de grupo" class="group-image">
        <h4> <?php echo $totalEventos; ?> Eventos Disponibles</h4>
        <h1>Eventos Atléticos</h1>
        <h2>Registra nuevas Carreras</h2>
        <div class="nav">
            <a href="formulario.php"><button>Nueva Carrera</button></a>
            <a href="formulario2.php"><button>Carreras Disponibles</button></a>
        </div>
    </div>
</body>
</html>




