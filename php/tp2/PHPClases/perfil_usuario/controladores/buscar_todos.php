<?php
    require_once("../usuario.php");
    require_once("../usuario_CRUD.php");

    $crud= new UsuarioCrud();
    $usuario = new Usuario();

    $consulta= $crud->listar();
?>
