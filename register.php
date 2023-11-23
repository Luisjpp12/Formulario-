<?php

$user= "root";
$pass="";
$host="localhost";

$connection = mysqli_connect($host, $user, $pass);

$nombre = $_POST["nombre"];
$passw = $_POST["contra"]; 
$email = $_POST["email"]; 

if (!$connection){
    echo"No se ha podido conectar al servidor" .mysql_error();
}else{
    echo "<b><h3>Hemos conectado el servidor </h3></b>";
}

$datab ="formulario";

$db = mysqli_select_db($connection, $datab);

$instruccion_SQL = "INSERT INTO registros (nombre,email,contra) VALUES ('$nombre','$email','$passw')";

$resultado = mysqli_query($connection, $instruccion_SQL);
?>
