<?php
$nombre = "Adicentro";
$edad = 8;
$activo = true;

echo "Nombre: " . $nombre . "<br>";
echo "Edad: " . $edad . "<br>";

if ($edad >= 18) {
    echo "Es mayor de edad";
} else{
    echo $edad . " Es menor de edad";
}

?>