<?php
include "../conexion.php";
/*
$nombreEdit = "";
$edadEdit = "";
$idEdit = "";
*/
//Editar
if (isset($_GET["editar"])) {
    $idEdit = $_GET["editar"];

    $result = $conn->query("SELECT * FROM personas WHERE id=$idEdit");
    $data = $result->fetch_assoc();

    $nombreEdit = $data["nombre"];
    $edadEdit = $data["edad"];
}

include "../index.php";