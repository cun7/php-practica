<form method="POST" action="/php-practica/acciones/guardar.php">
    <label></label>
    <input type="hiden" name="id" value="<?php echo $idEdit ?? ''; ?>">

    <label>Nombre:</label><br>
    <input type="tex" name="nombre" value="<?php echo $nombreEdit ?? ''; ?>"><br><br>

    <label>Edad:</label><br>
    <input type="number" name="edad" value="<?php echo $edadEdit ?? ''; ?>"><br><br>

    <button type="submit">Guadar
        <?php //echo $idEdit ? "Actualizar" : "Guardar"; ?>
    </button>
</form>