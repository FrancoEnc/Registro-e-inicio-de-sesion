<?php
function signin($u,$e,$c) {
    $validoUs = "Elian";
    $emailValido = "totoencina10@gmail.com";
    $passValida = "elian";
    if ($nombreUsuario == $validoUs && $emailUsuario == $emailValido && $passUs == $passValida) {
        setcookie("usuario",$validoUs);
    } 
    else 
    {
    
        header("Location: registro.php");
        
    }
}

function registro($n,$a,$p,$d) {


}
    
    

?>