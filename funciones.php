<?php

function signin($u,$e,$c) {
    $validoUs = "Elian";
    $emailValido = "totoencina10@gmail.com";
    $passValida = md5("elian");
    if ($u == $validoUs && $e == $emailValido && $c == $passValida) {
        setcookie("usuario",$validoUs);
        return "Login exitoso";
    
    }
    else
    {
   
        header("Location: registro.php");
       
    }
}



function registro($n,$a,$p,$d) {
}
    
    

?>