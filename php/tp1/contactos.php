<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/estilosContactos.css">
    <link rel="stylesheet" href="../../css/alertify.css">
    <link rel="stylesheet" href="../../css/themes/semantic.css">
    <script src="../../js/alertify.js"></script>
    <title>Contacto</title>
</head>
<script type="text/Javascript">
    function confirmar(){
        alertify.alert("Hotel Cataratas","Tu consulta se envió correctamente").set('label','Aceptar');
    }
</script>
<body>
    <div class="container">
        <div class="row justify-content-center pt-5 mt-5 mr-1">
            <div class="col-md-4 formulario">
                <form method="post" action="envioMail.php">
                <div class="form-group text-center pt-2">
                    <h1 class="text-light">Contacto</h1>
                </div>
                <div class="form-group mx-sm-4 pt-2">
                    <input id="nombre" class="form-control" type="text" name="nombre" required placeholder="Nombre">
                </div>
                <div class="form-group mx-sm-4">
                    <input id="apellido" class="form-control" type="text" name="apellido" required placeholder="Apellido">
                </div>
                <div class="form-group mx-sm-4">
                    <input id="email" class="form-control" type="email" name="email" required placeholder="Email">
                </div>
                <div class="form-group mx-sm-4">
                    <input id="asunto" class="form-control" type="text" name="asunto" required placeholder="Asunto">
                </div>
                <div class="form-group mx-sm-4 pb-1">
                    <textarea class="form-control" name="mensaje" id="mensaje" rows="5" required placeholder="Mensaje"></textarea>
                </div>
                <div class="form-group mx-sm-4 pb-1">
                    <button type="submit" class="btn btn-block ingresar" onclick=confirmar()>ENVIAR</button>
                </div>
                    
                </form>
            </div>
        </div>
    </div>
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