<?php
    $tipoList = $_POST['tipoList'];
    

    switch ($tipoList) {
        case 'uno':
            require_once("../tarea.php");
            require_once("../tarea_CRUD.php");
            $tarea = new Tarea();
            $crud  = new TareaCrud();
            $agenda=$crud->listarAgenda();
            include("../vistas/tarea_listado_completo.php");
            break;
        case 'dos':
            $fecha = $_POST['fecha'];
            require_once("../tarea.php");
            require_once("../tarea_CRUD.php");
            $tarea = new Tarea();
            $crudTarea = new TareaCrud();
            $listaDeFecha = $crudTarea->listarFecha($fecha);
            
                include("../vistas/tarea_listado_fecha.php");
            

            
            break;
        case 'tres':
            $eq=(int)$_POST['equipo'];
            require_once("../tarea.php");
            require_once("../tarea_CRUD.php");
            $tarea = new Tarea();
            $crudTarea = new TareaCrud();
            $listaResp = $crudTarea->listarResp($eq);
            include("../vistas/tarea_listado_resp.php");

            break;
        default:
            # code...
            break;
    }

    
?>