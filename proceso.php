<?php
$nombreUsuario = $_POST["nombreUs"];
$emailUsuario = $_POST["emailUs"];
$passUsuario = md5($_POST["contraseñaUs"]);
$validoUs = "Franco";
$emailValido = "totoencina10@gmail.com";
$passValida = "hola";
if($nombreUsuario == $validoUs && $emailUsuario == $emailValido && $passUsuario == $passValida) {
    echo "Logueo exitoso ";
}
else{
    echo "Datos invalidos ";
}

?>