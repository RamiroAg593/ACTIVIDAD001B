<?php

//Datos de conexión

function connection(){
$servername = 'localhost';
$username = 'root';
$password = '';

$db = 'eventos';


//Conexión a Base de Datos

$connect = mysqli_connect($servername,$username,$password);

//Retornar datos
mysqli_select_db($connect, $db);

return $connect;

}

//Comprobar

/* if(!$conexion) {
    die("Conexión fallida: " . mysqli_connect_error());
}
else    
    echo "Conexión Exitosa"."<br>"; */



?>
