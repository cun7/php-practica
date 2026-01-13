<?php
//$conexion = mysqli_connect("localhost", "root", "","php_practica");

$host = "localhost";
$user = "root";
$pass = "";
$db = "php_practica";

$conn = new mysqli($host, $user, $pass, $db);

if($conn -> connect_error){
    die( "Conexión fallida." . $conn -> connect_error);
}else{
    echo "Conexión exitosa .";
}


?>