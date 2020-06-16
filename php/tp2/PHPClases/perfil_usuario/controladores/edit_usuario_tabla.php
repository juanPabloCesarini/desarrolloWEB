<?php
require_once('../usuario.php');
require_once('../usuario_CRUD.php');

$crud = new UsuarioCrud();
$usuario = new Usuario();
if (isset($_POST['editarL'])) {
    $usuario->setId($_POST['id']);
    $usuario->setCodigo($_POST['codigo']);
    $usuario->setNombre($_POST['nombre']);
    $usuario->setApellido($_POST['apellido']);
    $usuario->setMail($_POST['mail']);
    $usuario->setTelefono($_POST['telefono']);
    $crud->actualizar($usuario);
    if ($crud) {
        header("location: ../vistas/listado.php");
    } else {
        header("location: ../vistas/error.php");
    }
}
?>