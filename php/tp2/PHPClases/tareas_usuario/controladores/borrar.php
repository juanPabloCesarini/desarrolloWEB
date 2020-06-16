<?php
    require_once('../tarea.php');
    require_once('../tarea_CRUD.php');
    $crud = new TareaCrud();
    $tarea = new Tarea();
    $tarea->setIdTareas($_GET['id']);
    $eliminar=$crud->eliminar($tarea->getIdTareas());
    header("location: ../vistas/tarea_listado.php");
