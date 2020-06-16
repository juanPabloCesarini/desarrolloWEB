<?php
    require_once('../usuario.php');
    require_once('../usuario_CRUD.php');
    $crud = new UsuarioCrud();
    $usuario = new Usuario();
    $usuario->setId($_GET['id']);
    $eliminar=$crud->eliminar($usuario->getId());
    header("location: ../vistas/listado.php");
?>