<?php
/*$nombre = "Adicentro";
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

*/

include "conexion.php";
//Editar
$nombreEdit = "";
$edadEdit = "";
$idEdit = "";

if (isset($_GET["editar"])){
    $idEdit = $_GET["editar"];

    $result = $conn->query("SELECT * FROM personas WHERE id=$idEdit");
    $data = $result->fetch_assoc();
    
    $nombreEdit = $data["nombre"];
    $edadEdit = $data["edad"];
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Formulario PHP</title>
    </head>
    <body>
        <h2>Formulario de prueba</h2>

        <form method="POST" action="">
        <label>ID:</label><br>
        <input type="hidden" name="id" value="<?php echo $idEdit; ?>"><br><br>

            <label>Nombre:</label><br>
            <input type="tex" name="nombre" value="<?php echo $nombreEdit;?>"><br><br>

            <label>Edad:</label><br>
            <input type="number" name="edad" value="<?php echo $edadEdit; ?>"><br><br>

            <button type="submit">
               <?php echo $idEdit ? "Actualizar" : "Guardar"; ?> 
            </button>
        </form>

        <?php
        //Guardar
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            
            $nombre = $_POST["nombre"];
            $edad = $_POST["edad"];
            $id = $_POST["id"];

            echo "<h3>Datos recibidos:</h3>";
            echo "ID: " . $id. "<br>";
            echo "Nombre: " . $nombre. "<br>";
            echo "Edad: " .$edad . "<br>";

            if($edad >= 18){
                echo "Es mayor de edad";
            }else{
                echo "Es menor de edad";
            }

            if (empty($nombre) || empty($edad)){
                echo "<br>Todos los campos son obligatorios";
            }

            if(!empty($nombre) && !empty($edad)){
                
                if($id){
                    //Actualizar
                    $sql = "UPDATE personas SET nombre='$nombre', edad='$edad' WHERE id=$id";
                }else{
                    //Insertar  
                    $sql = "INSERT INTO personas (nombre, edad) VALUES ('$nombre', '$edad')";

                    echo "<h4>Datos guardados correctamente</h4>";
                }
                $conn -> query($sql);
                //if($conn -> query($sql) === TRUE){
                    //echo "<h4>Datos guardados correctamente</h4>";
                //}else{
                    //echo "Error al guardar" . $conn -> error;
                //}
            }else{
                echo "<br>Todos los campos son obligatorios1"; 
            }
        }

        //Listar datos guardados
        $resultado = $conn->query("SELECT * FROM personas");

        echo "<h3>Personas Resgistradas</h3>";

        while($fila = $resultado->fetch_assoc()){
            echo "Id: ".$fila["id"]."-";
            echo "Nombre: ".$fila["nombre"]."-";
            echo "Edad: ".$fila["edad"]."";

            echo "<a href='?eliminar=".$fila["id"]."'>Eliminar</a>";
            echo "<a href='?editar=".$fila["id"]."'>Editar</a>";
            echo "<br>";
        }
        
        //Eliminar
        if(isset($_GET["eliminar"])){
            $id = $_GET["eliminar"];

            $sql = "DELETE FROM personas where id= $id";
            $conn->query($sql);
        }
        
            echo "<label>Registro eliminado correctamente.</label>";
        


        ?>
    </body>
</html>
