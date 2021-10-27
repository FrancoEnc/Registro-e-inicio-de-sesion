<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Portfolio</title>
</head>
<body class="pagina">
<div class="container-fluid">
        <header>
        <nav>
            <?php include_once("navbar.php"); ?>
        </nav>
        </header>
</div>
<main> 
<div class="container-fluid p-5 ms-5">
<?php

$registro = array();

$datosPU = array();
$datosPU["nombre"] = "Franco";
$datosPU["apellido"] = "Encina";
$datosPU["edad"] = "20";
$datosPU["email"] = "franco@gmail.com";
$datosPU["dni"] = "43013848";

$datosPD = array();
$datosPD["nombre"] = "Ailina";
$datosPD["apellido"] = "Castro";
$datosPD["edad"] = "29";
$datosPD["email"] = "castroailen@gmail.com";
$datosPD["dni"] = "43013848";

$datosPT = array();
$datosPT["nombre"] = "Sofia";
$datosPT["apellido"] = "Aguirre";
$datosPT["edad"] = "24";
$datosPT["email"] = "sofia@gmail.com";
$datosPT["dni"] = "43013848";

$datosPC = array();
$datosPC["nombre"] = "Elian";
$datosPC["apellido"] = "Fuseneco";
$datosPC["edad"] = "30";
$datosPC["email"] = "elianfu@gmail.com";
$datosPC["dni"] = "43013848";

$registro[0] = $datosPU;
$registro[1] = $datosPD;
$registro[2] = $datosPT;
$registro[3] = $datosPC;
?>
<div class="row">
    <div class="col-12 col-sm-3"><h3>Nombre</h3></div>
    <div class="col-12 col-sm-3"><h3>Apellido</h3></div>
    <div class="col-12 col-sm-2"><h3>Edad</h3></div>
    <div class="col-12 col-sm-2"><h3>Email</h3></div>
    <div class="col-12 col-sm-2"><h3>DNI</h3></div>
</div>

<?php for ($i = 0; $i < count($registro); $i++) {?>
    <div class="row">
    <div class="col-12 col-sm-3"><? echo $registro[$i]["nombre"]; ?></div>
    <div class="col-12 col-sm-3"><? echo $registro[$i]["apellido"]; ?></div>
    <div class="col-12 col-sm-2"><? echo $registro[$i]["edad"]; ?></div>
    <div class="col-12 col-sm-2"><? echo $registro[$i]["email"]; ?></div>
    <div class="col-12 col-sm-2"><? echo $registro[$i]["dni"]; ?></div>
    </div>
<?php
}
?>








</div>
</main>
    
<div class="container-fluid">
    <footer class="text-center">
        <?php include_once ("footer.php"); ?>  
    </footer>
</div>

</body>
</html>

