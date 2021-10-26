<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <?php include_once("armartarjeta.php"); ?>
    <div class="container">
        <div class="row">
            <div class="col-12 my-3">
                <h1>¡BIENVENID@ AL SISTEMA!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-primary" role="alert">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Mollitia nobis est quod necessitatibus excepturi deserunt tempora odit beatae, possimus error in quidem dolore provident impedit praesentium perspiciatis corrupti sequi architecto!
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ms-4 ">
                <div class="card" style="width: 20rem;">
                    <ul class="list-group">
                        <li class="list-group-item"><h6>Nombre</h6><?php echo $nombreUsuario?></li>
                        <li class="list-group-item"><h6>Apellido</h6><?php echo $apellidoUsuario?></li>
                        <li class="list-group-item"><h6>Profesion</h6><?php echo $profesionUsuario?></li>
                        <li class="list-group-item"><h6>Descripcion</h6><?php echo $descripcionUsuario?></li>
                    </ul>
                </div>
            </div>
        </div>  
        <div class="row">
            <div class="col-12">
                <a href="index.php" class="btn btn-primary mt-3">Salir</a>
            </div>
        </div>

</body>
</html>