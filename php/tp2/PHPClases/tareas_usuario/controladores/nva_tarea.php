<?php
    require_once("../../conexion.php");
    require_once("../tarea.php");
    require_once("../tarea_CRUD.php");

    $tarea = new Tarea();
    $crud  = new TareaCrud();

    if (isset($_POST['guardar'])) {
        $tarea->setFecha($_POST['fecha']);
        $tarea->setTiempo($_POST['tiempo']);
        $tarea->setDescripcion($_POST['descripcion']);
        $tarea->setObservaciones($_POST['observaciones']);
        $idIntegrante=(int)$_POST['equipo'];
        if ($idIntegrante > 0) {
            $tarea->setIdIntegrantes($idIntegrante);
            $crud->insertar($tarea);
            header("location: ../vistas/tarea_home.php");
        }else{
            header("location: ../../error.php");
        }
    }else{
        header("location: ../../error.php");
    }
?>