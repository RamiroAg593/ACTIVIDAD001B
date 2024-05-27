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
    <link rel="stylesheet" href="style.css">
    
    <title>Registro Usuarios</title>
</head>
<body>
    <div class="register">
        <h2>CREAR EVENTO DE CARRERA</h2>
        <h4>Eventos Registrados Actualemte: <?php echo $totalEventos; ?></h4>

        <form action="crear_evento1.php" method="POST">

            <label for="id">Codigo de la Carrera:</label><br>
            <input type="text" id="id" name="id" required><br>

            <label for="nombreEvento">Nombre del Evento:</label><br>
            <input type="text" id="nombreEvento" name="nombreEvento" required><br>

            <label for="fechaEvento">Fecha del Evento:</label><br>
            <input type="date" id="fechaEvento" name="fechaEvento" required><br>

            <label for="horaEvento">Hora del Evento:</label><br>
            <input type="time" id="horaEvento" name="horaEvento" required><br>

            <label for="lugarEvento">Lugar del Evento:</label><br>
            <input type="text" id="lugarEvento" name="lugarEvento" required><br>

            <label for="distancia">Distancia (km):</label><br>
            <input type="number" step="0.01" id="distancia" name="distancia" required><br>

            <label for="categoria">Categoría:</label><br>
            <select id="categoria" name="categoria" required>
                <option value="Infantil">Infantil</option>
                <option value="Senior">Senior</option>
                <option value="Mas de 40 años">Más de 40 años</option>
                <option value="Libre">Libre</option>
            </select><br>

            <label for="descripcion">Descripción:</label><br>
            <textarea id="descripcion" name="descripcion" required></textarea><br><br>

            <input type="submit" value="Registrar Evento" class="button">
            <td><a href="index.php?" class="cancelar-button">Cancelar</a></td>
        </form>
    </div>
</body>
</html>
