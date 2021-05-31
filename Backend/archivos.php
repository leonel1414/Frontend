<?php
if (isset($_POST['enviar']) && !empty($_POST['enviar'])) {
    $usuario = $_POST['usuario_nuevo'];
    $contrasena = $_POST['contrasena_repetida'];
    ($archivo = fopen('usuarios.txt', 'w')) or
        die('Problemas al crear archivo txt');
    $txt = '';
    $txt = $txt . $usuario . " \n" . $contrasena;
    fwrite($archivo, $txt);
    fclose($archivo);
}

if (isset($_POST['acept']) && !empty($_POST['acept'])) {
    $usuario1 = '';
    $contrasena1 = '';
    $arch = fopen('usuarios.txt', 'r');

    while (!feof($arch)) {
        $usuario1 .= fgets($arch);
        $contrasena1 .= fgets($arch);
    }

    fclose($arch);
    $usuario2 = $_POST['usuario'];
    $contrasena2 = $_POST['contra'];

    if ($usuario1 = $usuario2 && ($contrasena1 = $contrasena2)) {
        echo "<script>
alert('bienvenido.');
</script>";
    } else {
        echo "<script>
alert('datos incorrectos.');
</script>";
    }
}

?>