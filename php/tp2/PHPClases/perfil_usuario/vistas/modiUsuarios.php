<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="../../../../../css/estilosTareas.css">
    <link rel="stylesheet" href="../../../../../css/estilosEquipos.css">
    <link rel="stylesheet" href="../../../../../css/bootstrap.css">
    <link rel="stylesheet" href="../../../../../css/fonts.css">
    <link rel="stylesheet" href="../../../../../css/arriba.css">
    <link rel="stylesheet" href="../../">
    <link rel="shortcut icon" href="../../../../../img/isotarea.ico" type="image/x-icon">
    <script src="../../../../../js/jquery-3.5.1.min.js"></script>
    <script src="../../../../../js/arriba.js"></script>
    <title>enHorario | Administador de Tareas</title>
</head>
<body class="bg-tareas-equipo">
    <span style="background: #660061;" class="arriba icon-arrow-up"></span>
        <header class="container">
            <div class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent ml-auto">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item py-1 mr-2">
                                <a class="nav-link btn btn-lg btn-outline-light" href="../../../adminTareas.php"> 
                                <span class="icon-home3"></span>
                                Inicio
                                </a>
                            </li>
                            <li class="nav-item py-1 mr-2">
                                <a class="nav-link btn btn-lg btn-outline-light" href="../../tareas_usuario/vistas/tarea_home.php">
                                <span class="icon-tasks"></span>
                                Tareas
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="row">
            <!--menu-->
            </div>
        </header>
        <main>
            <div class="row">
                <div class="col-sm-12 col-md-3 py-2 my-2 text-center nuevo">
                    <h4>Sos Nuevo?</h4>
                    <p>Date de alta como usuario y comenzá a organizar tu trabajo</p>
                    <div><a href="../vistas/altaUsuarios.php#nvo" class="btn btn-outline-light">IR</a></div>
                </div>
                <div class="col-sm-12 col-md-3 py-2 my-2 text-center editar">
                    <h4>Hay errores?</h4>
                    <p>Con un solo click accedes nuevamente al formulario y podés corregir tus datos</p>
                    <div><a href="#edit" class="btn btn-outline-light">IR</a></div>
                </div>
                <div class="col-sm-12 col-md-3 py-2 my-2 text-center listar">
                    <h4>Listados</h4>
                    <p>Si retomas un proyecto después de un tiempo y no recordas los integrantes,
                        consultá el listado y podrás editar, borrar o ingresar un nuevo integrante
                    </p>
                    <div><a href="../vistas/listado.php#list" class="btn btn-outline-light">IR</a></div>
                </div>
                <div class="col-sm-12 col-md-3 py-2 my-2 text-center borrar">
                    <h4>Se achica el equipo?</h4>
                    <p>Cumpliste el contrato y no renovas o renuncias, podes darte la baja definitiva de nuestra aplicación
                        darte de alta nuevamente cuando gustes.
                    </p>
                    <div><a href="../vistas/listado.php#list" class="btn btn-outline-light">IR</a></div>
                </div>
            </div>
            <div class="row" id="edit">
                <div class="col-sm-12 py-2 ">
                    <div class="container">
                        <div class="editar">
                            <h2 class="text-center text-uppercase">Editar Usuario</h2>
                        </div>
                        <form action="../vistas/buscarUs.php" method="post">
                            <div class="form-group row">
                                <div class="col-sm-12 col-md-6">
                                    <input type="text" class="form-control" name="codigo" placeholder="Ingresar código de usuario" id="">
                                    <input type="hidden" name="buscar">
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <input type="submit" class="btn btn-lg btn-outline-light" value="Buscar">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer">
            <div class="pt-5 text-white">
                 <div class="container">
                      <div class="row footer-transp">
                          <div class="col-sm-12 col-md-6 col-lg-6 text-center align-self-center">
                               <p class="mb-5">
                                  <h3 class="txt-footer"><strong>enHorario<sup>®</sup></strong></h3>
                                  <h5 class="txt-footer">Lascano 4044 - CABA</h5>
                                  <h5 class="txt-footer">Buenos Aires - Argentina</h5>
                                  <h5 class="txt-footer">5411-4566-6550</h5>
                               </p>
                          </div>
                          <div class="col-sm-12 col-md-6 col-lg-6 text-center align-self-center py-5"> 
                              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.595620901175!2d-58.50053108538631!3d-34.61438566556837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcc9d76c2103d9%3A0x87b8d6d96fbc737c!2sLascano%204044%2C%20C1417%20GZJ%2C%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1591201217375!5m2!1ses-419!2sar" width="400" height="200" frameborder="0" style="border:0; margin-top: 20px; margin-right: 10px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                          </div>
                      </div>
                 </div>
            </div>
        </footer>
        
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="../../../../../js/bootstrap.js"></script>
        <script src="../../../../../js/bootstrap.bundle.js"></script>
    </body>

</html>
