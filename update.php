<?php
require ('conexion.php');
$con = connection();

$id=$_GET['id'];

$sql = "SELECT * FROM carreras WHERE id ='$id'";
$query = mysqli_query($con, $sql);
$row = mysqli_fetch_array($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Actualización de evento </title>
</head>
<body>
    <div class="usuarios-form register">
    <form action="edit_user.php" method="POST">
        <h2>Actualizar Evento</h2>

        <input type="hidden" id="id_original" name="id_original" value="<?= $row['id'] ?>"><br>

                <label for="id">Codigo de la Carrera:</label><br>
                <input type="text" id="id" name="id" value="<?= $row['id'] ?>"><br>

                <label for="nombreEvento">Nombre del Evento:</label><br>
                <input type="text" id="nombreEvento" name="nombreEvento" value="<?= $row['nombreEvento'] ?>"><br>

                <label for="fechaEvento">Fecha del Evento:</label><br>
                <input type="date" id="fechaEvento" name="fechaEvento" value="<?= $row['fechaEvento'] ?>"><br>

                <label for="horaEvento">Hora del Evento:</label><br>
                <input type="time" id="horaEvento" name="horaEvento" value="<?= $row['horaEvento'] ?>"><br>

                <label for="lugarEvento">Lugar del Evento:</label><br>
                <input type="text" id="lugarEvento" name="lugarEvento" value="<?= $row['lugarEvento'] ?>"><br>

                <label for="distancia">Distancia (km):</label><br>
                <input type="number" step="0.01" id="distancia" name="distancia" value="<?= $row['distancia'] ?>"><br>

                <label for="categoria">Categoría:</label><br>
                <select id="categoria" name="categoria" required>
                    <option value="Infantil" <?= $row['categoria'] == 'Infantil' ? 'selected' : '' ?>>Infantil</option>
                    <option value="Senior" <?= $row['categoria'] == 'Senior' ? 'selected' : '' ?>>Senior</option>
                    <option value="Mas de 40 años" <?= $row['categoria'] == 'Mas de 40 años' ? 'selected' : '' ?>>Más de 40 años</option>
                    <option value="Libre" <?= $row['categoria'] == 'Libre' ? 'selected' : '' ?>>Libre</option>
                </select><br>

                <label for="descripcion">Descripción:</label><br>
                <textarea id="descripcion" name="descripcion"><?= $row['descripcion'] ?></textarea><br><br>
        
        
        <br>
        
        <input type="submit" value="Actualizar Evento" class="button">
    </form>
    </div>

    
</body>
</html>

