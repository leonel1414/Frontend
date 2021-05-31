<?php
//echo("Bienvenido a PHP");

if (isset($_FILES['archivo'])) {
    $nombreArchivo = 'uploads/' . $_FILES['archivo']['name'];
    move_uploaded_file($_FILES['archivo']['tmp_name'], $nombreArchivo);
    return;
}

if (isset($_POST['usuario_nuevo'])) {
    echo $_POST['usuario_nuevo'] .
        ' - ' .
        $_POST['contrasena_nueva'] .
        ' - ' .
        $_POST['contrasena_repetida'];

    return;
}
?>