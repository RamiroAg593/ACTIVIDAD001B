<?php
require ('conexion.php');
$con = connection();

$sql = "SELECT * FROM carreras";

$query = mysqli_query($con, $sql);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title> Carreras Disponibles</title>
</head>


<body>
    
    <div class="table-wrapper">
        <h2>CARRERAS DISPONIBLES </h2>
        <table class="fl-table">
            <thead>
                <tr>
                    <th> Codigo Carrera </th>
                    <th> Nombre del Carrera </th>
                    <th> Fecha de la carrera</th>
                    <th> Hora de la Carrera </th>
                    <th> Lugar </th>
                    <th> Distancia (Km) </th>
                    <th> categoría </th>
                    <th> descripción </th>
                    <th></th>
                    <th></th>
                </tr>           
            </thead>

            <tbody>

                <?php while($row = mysqli_fetch_array($query)): ?>

                <tr>
                    
                <td><?= $row['id'] ?></td>
                    <td><?= $row['nombreEvento'] ?></td>
                    <td><?= $row['fechaEvento'] ?></td>
                    <td><?= $row['horaEvento'] ?></td>
                    <td><?= $row['lugarEvento'] ?></td>
                    <td><?= $row['distancia'] ?></td>
                    <td><?= $row['categoria'] ?></td>
                    <td><?= $row['descripcion'] ?></td>

                    <td><a href="update.php?id=<?= $row['id'] ?>" class="edit-button">Editar</a></td>
                    <td><a href="confirmacion_delete.php?id=<?= $row['id'] ?>" class="delete-button">Eliminar</a></td>
                    
                                   </tr>
                <?php endwhile; ?>

                
            </tbody>   
            
            
            
        </table> 
        
        

    </div>

    <td><a href="index.php?" class="return-button">Inicio</a></td>

</body>

</html>

