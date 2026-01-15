<?php
include "../conexion.php";

$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$id = $_POST["id"];

if (!empty($nombre) && !empty($edad)) {

    if ($id) {
        //Actualizar
        $sql = "UPDATE personas SET nombre='$nombre', edad='$edad' WHERE id=$id";

    } else {
        //Insertar  
        $sql = "INSERT INTO personas (nombre, edad) VALUES ('$nombre', '$edad')";

        echo "<h4>Datos guardados correctamente</h4>";
    }
    $conn->query($sql);
    //if($conn -> query($sql) === TRUE){
    //echo "<h4>Datos guardados correctamente</h4>";
    //}else{
    //echo "Error al guardar" . $conn -> error;
    //}
} else {
    echo "<br>Todos los campos son obligatorios1";
}

header ("Location:../index.php");