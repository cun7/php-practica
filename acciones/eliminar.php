<?php
include "../conexion.php";

//Eliminar
//if (isset($_GET["eliminar"])) {
    $id = $_GET["eliminar"];

    $sql = "DELETE FROM personas where id= $id";
    $conn->query($sql);
//}
echo "<label>Registro eliminado correctamente.</label>";

header ("location:../index.php");


