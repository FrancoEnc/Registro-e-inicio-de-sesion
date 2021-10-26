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
        <div class="container">
            <h1 class="registro pt-3">Necesitas registrarte para acceder</h1>
            <div class="row">
                <div class="col-12">
                    <a href="armartarjeta.php" class="btn btn-primary mt-3">Registrarme</a>
                </div>
            </div>
        </div>

    </main>               
       
    <div class="container-fluid">
        <footer class="text-center">
            <?php include_once ("footer.php"); ?>
        </footer>
    </div>
   
</body>
</html>