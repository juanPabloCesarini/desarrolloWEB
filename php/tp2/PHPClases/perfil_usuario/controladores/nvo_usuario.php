<?php

// incluir clases y crear objetos

require_once('../usuario.php');
require_once('../usuario_CRUD.php');

$crud = new UsuarioCrud();
$usuario = new Usuario();

if (isset($_POST['guardar'])){
    $usuario -> setCodigo($_POST['codigo']);
    $usuario -> setNombre($_POST['nombre']);
    $usuario -> setApellido($_POST['apellido']);
    $usuario -> setMail($_POST['mail']);
    $usuario -> setTelefono($_POST['telefono']);

    // insertar en la base usando objeto crud

    $crud->insertar($usuario);

    header("location: ../vistas/altaUsuarios.php");

}else{
    header("location: ../vistas/error.php");
}

?>