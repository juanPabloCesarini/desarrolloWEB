<?php
    require_once("../tarea.php");
    require_once("../tarea_CRUD.php");

    $tarea = new Tarea();
    $crudTarea = new TareaCrud();
    
    if (isset($_POST['guardar'])){
        $tarea->setIdTareas($_POST['idTareas']);
        $tarea->setFecha($_POST['fecha']);
        $tarea->setTiempo($_POST['tiempo']);
        $tarea->setDescripcion($_POST['descripcion']);
        $tarea->setObservaciones($_POST['observaciones']);
        $idIntegrante=(int)$_POST['equipo'];
        if ($idIntegrante >0) {
            $tarea->setIdIntegrantes($idIntegrante);
            $crudTarea->modificar($tarea);
            header("location:../vistas/tarea_listado.php");
        }else{
            header("location: ../../error.php");
        }
    }
    
?>