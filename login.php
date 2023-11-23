<?php

$user= "root";
$pass="";
$host="localhost";

$connection = mysqli_connect($host, $user, $pass);

$nombre = $_POST["nombre"];
$passw = $_POST["contra"];

if (!$connection){
    echo"No se ha podido conectar al servidor" .mysql_error();
}else{
    echo "<b><h3>Hemos conectado el servidor </h3></b>";
}

$datab ="formulario";

$db = mysqli_select_db($connection, $datab);


$query = mysqli_query($connection, "SELECT nombre, contra FROM registros WHERE nombre ='".$nombre."' and contra = '".$passw."'  ");

$nr = mysqli_num_rows($query);

if($nr == 1){
    echo "Bienvenido: ".$nombre;
}else if($nr == 0){
    echo "No se ingreso correctamente";
}


?>