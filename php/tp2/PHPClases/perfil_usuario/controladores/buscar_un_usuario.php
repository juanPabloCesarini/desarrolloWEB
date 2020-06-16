<?php
    require_once("../usuario.php");
    require_once("../usuario_CRUD.php");

    $crud= new UsuarioCrud();
    $usuario = new Usuario();

    $usuario->setCodigo($_POST['codigo']);
    $consulta= $crud->buscarUs($usuario->getCodigo());
    /* if ($consulta == ' '){
        header("location: ../../error.php");
    } */
    echo gettype($consulta);
?>
