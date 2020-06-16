<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilosQuienes.css">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="shortcut icon" href="../img/iso.ico" type="image/x-icon">
    <title>Desarrollo WEB</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-success">
            <img src="../img/iso.png" width="40" height="40" class="d-inline-block align-top py-1" alt="">
                <strong>Friends Software Factory</strong>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="../php/quienes.php"><span class="icon-group"></span>Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../php/historia.php"><span class="icon-calendar"></span>Nuestra Historia</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="../php/trabajos.php"><span class="icon-suitcase"></span>Nuestros Trabajos</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <main class="fondo">
        <div class="text-dark py-3">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <img src="../img/JuanPablo.jpg" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Juan Pablo Cesarini</h3>
                                    <p class="card-text">
                                        <span class="icon-gmail"></span>jpablocesarini@gmail.com
                                    </p>
                                    <p class="card-text">
                                        <span class="icon-whatsapp"></span>11-6796-9503
                                    </p>
                            </div>
                        </div>  
                   </div>
                   <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <img src="../img/Sebastian.jpg" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Sebastián Grillo</h3>
                                    <p class="card-text">
                                        <span class="icon-gmail"></span>sebagrillo86@gmail.com
                                    </p>
                                    <p class="card-text">
                                        <span class="icon-whatsapp"></span>11-5708-5402
                                    </p>
                            </div>
                        </div>  
                   </div>
                   <div class="col-sm-12 col-md-4">
                    <div class="card">
                        <img src="../img/Natalia.jpg" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h3 class="card-title">Natalia Larossa</h3>
                                    <p class="card-text">
                                        <span class="icon-gmail"></span>natalialarossa@gmail.com
                                    </p>
                                    <p class="card-text">
                                        <span class="icon-whatsapp"></span>11-4434-7718
                                    </p>
                            </div>
                        </div>  
                   </div>
            </div>
        </div>
    </main>
    <footer class="bg-success text-center py-2">
        <p><h4>Friends Software Factory®</h4></p>
        <p><h5><?php include("fechaActual.php")?></h5></p>

    </footer>
                
        
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>