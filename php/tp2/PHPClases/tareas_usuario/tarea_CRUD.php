<?php
   require_once("../../conexion.php");

   class TareaCrud{
    public function __construct() {}

    // MÉTODO INSERTAR

    public function insertar($tarea){
        $db = Conexion::conectar();
        $alta = $db->prepare('INSERT INTO tareas
                              VALUES (NULL, :fecha,
                                            :tiempo, 
                                            :descripcion, 
                                            :observaciones, 
                                            :idIntegrantes)');
        $alta->bindValue('fecha', $tarea->getFecha());
        $alta->bindValue('tiempo', $tarea->getTiempo());
        $alta->bindValue('descripcion', $tarea->getDescripcion());
        $alta->bindValue('observaciones', $tarea->getObservaciones());
        $alta->bindValue('idIntegrantes', $tarea->getIdIntegrantes());
        $alta->execute();
    }

    // MÉTODO PARA MOSTRAR LOS DATOS POR ORDEN DE REGISTRO

    public function listarAgenda(){
        $db =Conexion::conectar();
        $listaTareas=[];
        $consulta = $db->query("SELECT * FROM tareas ORDER BY fecha");
        foreach ($consulta->fetchAll() as $dato) {
            $unaTarea = new Tarea();
            $unaTarea->setIdTareas($dato['idTareas']);
            $unaTarea->setFecha($dato['fecha']);
            $unaTarea->setTiempo($dato['tiempo']);
            $unaTarea->setDescripcion($dato['descripcion']);
            $unaTarea->setObservaciones($dato['observaciones']);
            $unaTarea->setIdIntegrantes($dato['idIntegrantes']);
            $listaTareas[]=$unaTarea;
        }  
        foreach($listaTareas as $lista){
            $busqueda = $db->query("SELECT *
                                    FROM tareas 
                                    INNER JOIN integrantes 
                                    WHERE tareas.idIntegrantes=integrantes.id
                                    ORDER BY fecha");
            $busqueda->execute();
            $listadoCompleto=$busqueda->fetchAll();
        }
        return $listadoCompleto;  
    }
    
    // MÉTODO PARA MOSTRAR SEGÚN FECHA POR ORDEN DE RESPONSABLE
    
    public function listarFecha($fecha){
        $db = Conexion::conectar();
        $registros=[];
        $consulta = $db->prepare('SELECT * 
                                FROM tareas
                                INNER JOIN integrantes
                                WHERE fecha=:fecha 
                                AND tareas.idIntegrantes = integrantes.id
                                ORDER BY integrantes.apellido
                                ');
        $consulta->bindValue('fecha', $fecha);
        $consulta->execute();
        foreach ($consulta->fetchAll() as $registro){
            $unaTarea = new Tarea();
            $unaTarea->setIdTareas($registro['idTareas']);
            $unaTarea->setFecha($registro['fecha']);
            $unaTarea->setTiempo($registro['tiempo']);
            $unaTarea->setDescripcion($registro['descripcion']);
            $unaTarea->setObservaciones($registro['observaciones']);
            $unaTarea->setNombre($registro['nombre']);
            $unaTarea->setApellido($registro['apellido']);
            $registros[]=$unaTarea;
        }
        return $registros;
    }
    
    // MÉTODO PARA MOSTRAR SEGÚN RESPONSABLE ORDENADO POR FECHA

    public function listarResp($resp){
        $db = Conexion::conectar();
        $registros=[];
        $consulta = $db->prepare('SELECT * 
                                FROM tareas
                                INNER JOIN integrantes
                                WHERE tareas.idIntegrantes = :resp 
                                AND tareas.idIntegrantes = integrantes.id
                                ORDER BY fecha');
        $consulta->bindValue('resp', $resp);
        $consulta->execute();
        foreach ( $consulta ->fetchAll() as $registro){
            $unaTarea = new Tarea();
            $unaTarea->setIdTareas($registro['idTareas']);
            $unaTarea->setFecha($registro['fecha']);
            $unaTarea->setTiempo($registro['tiempo']);
            $unaTarea->setDescripcion($registro['descripcion']);
            $unaTarea->setObservaciones($registro['observaciones']);
            $unaTarea->setNombre($registro['nombre']);
            $unaTarea->setApellido($registro['apellido']);
            $registros[]=$unaTarea;

        }
        return $registros;
    }
    // METODO MODIFICAR

    public function modificar($tarea){
        $db=Conexion::conectar();
        $edicion=$db->prepare("UPDATE tareas
                               SET
                               idTareas=:idTareas,
                               fecha=:fecha,
                               tiempo=:tiempo,
                               descripcion=:descripcion,
                               observaciones=:observaciones,
                               idIntegrantes=:idIntegrantes
                               WHERE idTareas = :idTareas
                            ");
        $edicion->bindValue(':idTareas', $tarea->getIdTareas(),PDO::PARAM_INT);
        $edicion->bindValue(':fecha',$tarea->getFecha(), PDO::PARAM_STR);
        $edicion->bindValue(':tiempo',$tarea->getTiempo(),PDO::PARAM_INT);
        $edicion->bindValue(':descripcion',$tarea->getDescripcion(),PDO::PARAM_STR);
        $edicion->bindValue(':observaciones',$tarea->getObservaciones(),PDO::PARAM_STR);
        $edicion->bindValue(':idIntegrantes',$tarea->getIdIntegrantes(),PDO::PARAM_INT);
        

        $edicion->execute();
    }

    // METODO BORRAR

    public function eliminar($id){
        $db = Conexion::conectar();
        $borrar=$db->prepare("DELETE FROM tareas
                              WHERE idTareas=:id");
        $borrar->bindValue('id',$id);
        $borrar->execute();
    }

    // METODO BUSCAR SEGÚN ID PARA MODIFICAR

    public function buscar($id){
        $db=Conexion::conectar();
        $busqueda=$db->prepare('SELECT * 
                                FROM tareas
                                INNER JOIN integrantes
                                WHERE idTareas = :id 
                                AND tareas.idIntegrantes = integrantes.id');
        $busqueda->bindValue('id',$id);
        $busqueda->execute();
        foreach ($busqueda ->fetchAll() as $registro) {
            $unaTarea = new Tarea();
            $unaTarea->setIdTareas($registro['idTareas']);
            $unaTarea->setFecha($registro['fecha']);
            $unaTarea->setTiempo($registro['tiempo']);
            $unaTarea->setDescripcion($registro['descripcion']);
            $unaTarea->setObservaciones($registro['observaciones']);
            $unaTarea->setNombre($registro['nombre']);
            $unaTarea->setApellido($registro['apellido']);
            $registros=$unaTarea;
        }
        return $registros;

    }
   }
?>