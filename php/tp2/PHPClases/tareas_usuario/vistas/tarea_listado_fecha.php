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
    <link rel="stylesheet" href="../../../../../css/alertify.css">
    <link rel="stylesheet" href="../../../../../css/themes/default.css">
    <script src="../../../../../js/jquery-3.5.1.min.js"></script>
    <script src="../../../../../js/arriba.js"></script>
    <script src="../../../../../js/form_tareas.js"></script>
    <script src="../../../../../js/alertify.js"></script>
    <link rel="shortcut icon" href="../../../../../img/isotarea.ico" type="image/x-icon">
    <title>enHorario | Administador de Tareas</title>
</head>
<body class="bg-tareas">
  <span style="background:  #002e66;" class="arriba icon-arrow-up"></span>
    <div class="pt-5 text-white">
        <div class="container">
            <header class="row">
                <nav class="navbar navbar-expand-lg navbar-light bg-transparent ml-auto">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item py-1 mr-2">
                                <a class="nav-link txt-nav btn btn-md btn-info" href="../../../adminTareas.php">
                                  <span class="icon-home2 mr-2"></span>Inicio
                                </a>
                            </li>
                            <li class="nav-item py-1 mr-2">
                                <a class="nav-link txt-nav btn btn-md btn-info" href="../../perfil_usuario/vistas/altaUsuarios.php">
                                  <span class="icon-group mr-2"></span>Usuarios
                                </a>
                            </li>
                            <li class="nav-item py-1 mr-2">
                                <a class="nav-link txt-nav btn btn-md btn-info" href="../../tareas_usuario/vistas/tarea_home.php">
                                  <span class="icon-tasks mr-2"></span>Agendar Tarea
                                </a>
                            </li>
                            <li class="nav-item  py-1 mr-2">
                                <a class="nav-link txt-nav btn btn-md btn-info" href="../../tareas_usuario/vistas/tarea_listado.php" >
                                  <svg class="bi bi-card-list" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
                                    <path fill-rule="evenodd" d="M5 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 5 8zm0-2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5z"/>
                                    <circle cx="3.5" cy="5.5" r=".5"/>
                                    <circle cx="3.5" cy="8" r=".5"/>
                                    <circle cx="3.5" cy="10.5" r=".5"/>
                                  </svg>
                                Consultar Trabajo Pendiente
                                </a>
                            </li>
                          </ul>
                    </div>
                </nav>
            </header>
        </div>
    </div>
    <div class="container py-3">
      
      <main>
      <div class="container">
          <?php include("tablaListadoFecha.php");?>  
      </div>
      </main>
    </div>
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
</html>';
?>