<?php
$nombre = "Adicentro";
$edad = 28;
$activo = true;

echo "Nombre: " . $nombre . "<br>";
echo "Edad: " . $edad . "<br>";

if ($edad >= 18) {
    echo "Es mayor de edad <br><br>";
} else{
    echo "Es menor de edad <br><br>";
}

//Bucles o Ciclos:
//Bucle for:
for ($i = 1; $i <= 5; $i++){
    echo "Número: " . $i . "<br>";
}

echo "<br>";

//Bucle while:
$contador = 1;

while ($contador <= 5){
    echo "Contador: " . $contador . "<br>";
    $contador++;
}

//Funciones:
//Ejemplo simple:
function saludar(){
    echo "Hola mundo";
}

echo "<br>";
saludar();

//Función con parámetro:
function saludarr ($nombre){
    echo "Hola " . $nombre;
}
echo "<br>";
saludarr("Juan <br>");
saludarr("Maria");


//Función con lógica:
function esMayorDeEdad($edad){
    if ($edad >=18) {
        return "Es mayor de edad";
    } else {
        return "Es menor de edad";
    }
}

echo "<br>";
echo esMayorDeEdad(28);

//Ejercicios
//Un for que muestre del 1 al 10
for($i=1; $i<=10; $i+1){
    echo "<br>" . $i++;
}


//Un while que muestre números pares
$contador1 = 1;

while($contador1 <=10){
    $contador1++;
    $cont = $contador1++; 
    echo "<br> Número par: " . $cont;
}

echo "<br>";
echo "<br>" ;

//Una función que reciba un número y diga si es par o impar
function parImpar($parImpar){
    //Sacar el residuo del número ingresado
    $residuo = $parImpar % 2;

    //Si el residuo del número ingresado es igual 0 entoces es par
    //y si es diferente que 0 entonces el número es impar
    if($residuo == 0){
        echo"El número ".$parImpar." es par"; 
    } else{
       echo"El número ".$parImpar." es impar"; 
    }
}

parImpar(10);

//Corregido
//Un for que muestre del 1 al 10
for ($j = 1; $j <= 10; $j++) {
    echo "<br>" . $j;
}

//Un while que muestre números pares
 //Opción simple
$contador1 = 2;

while ($contador1 <= 10) {
    echo "<br> Número par: " . $contador1;
    $contador1 += 2;
}

echo "<br>";

//Opción con lógica
$contador1 = 1;

while ($contador1 <= 10) {
    if ($contador1 % 2 == 0) {
        echo "<br> Número par: " . $contador1;
    }
    $contador1++;
}

//Una función que reciba un número y diga si es par o impar
//Función par o impar
function parImpar1($numero){
    if ($numero % 2 == 0) {
        return "El número $numero es par";
    } else {
        return "El número $numero es impar";
    }
}

echo "<br>";
echo parImpar1(10);

?>