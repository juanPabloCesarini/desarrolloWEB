<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/estilosHistoria.css">
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
        <div class="container justify-content-center">
            <section class="text-light py-5"> 
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../img/los3a.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/los3b.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/los3c.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <p class="h5 py-2">Si estás acá es porque necesitas algún tipo de solución informática, podríamos ofrecerte un descuento,
                            una promesa de resultado inigualable, enumerarte las tecnologías que manejamos, sin embargo, elegimos
                            que nos conozcas a través de estas imágenes.
                        </p>
                        <p class="h5 py-2">
                            Somos un grupo sólido, que se conoce desde el año 2018 cuando comenzó el recorrido académico.
                        </p>
                        <p class="text-center h3"><strong><em>Frinds Software Factory es una experiencia que va más allá de un contrato cliente-proveedor</em></strong> </p>
                    </div>
                </div>
            </section>
            <section class="text-light py-5">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <p class="h5 py-2">Tenemos la fuerza de los leones cuando se trata de defender lo nuestro, y así como nos pusimos la camiseta
                           de nuestro querido IFTS16, estáte seguro que si nos confias tu empresa, ya sea que necesites un software de gesitón
                           o un sitio web, también nos pondremos tu camiseta.
                        </p>
                        <p class="h5 py-2">No importa donde nos encuentre la vida físicamente, siempre nos arreglamos para cumplir con los objetivos, en la oficina
                           o haciendo home-office, le dedicamos las horas necesarias para cumplir con nuestros desafios.
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="../img/bandera.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/volantes.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="../img/cuarentena.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
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