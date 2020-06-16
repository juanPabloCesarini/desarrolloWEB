<?php
// inlcuir la conexion

require_once('../../conexion.php');

class UsuarioCrud{
    public function __construct() {}

    // METODO INSERTAR

    public function insertar($usuario){
        $db = Conexion::conectar();
        $alta=$db->prepare('INSERT INTO integrantes VALUES (NULL,:codigo,:nombre,:apellido,:mail,:telefono)');
        $alta->bindValue('codigo',$usuario->getCodigo());
        $alta->bindValue('nombre',$usuario->getNombre());
        $alta->bindValue('apellido',$usuario->getApellido());
        $alta->bindValue('mail',$usuario->getMail());
        $alta->bindValue('telefono',$usuario->getTelefono());
        $alta->execute();
    }

    // METODO BUSCAR X CODIGO

    public function buscarUs($codigo){
        $db = Conexion::conectar();
        $busqueda = $db -> prepare('SELECT * FROM integrantes WHERE codigo=:codigo');
        $busqueda -> bindValue('codigo',$codigo);
        $busqueda -> execute();
        $dato=$busqueda -> fetch();
        if ($codigo == $dato['codigo']) {
            $unUsuario = new Usuario();
            $unUsuario -> setId($dato['id']);
            $unUsuario -> setCodigo($dato['codigo']);
            $unUsuario -> setNombre($dato['nombre']);
            $unUsuario -> setApellido($dato['apellido']);
            $unUsuario -> setMail($dato['mail']);
            $unUsuario -> setTelefono($dato['telefono']);
            return $unUsuario;
        }else{
            header("location: ../../error.php");
        }
    }

    // METODO BUSCAR X // ID

    public function buscarID($id){
        $db = Conexion::conectar();
        $busqueda = $db -> prepare('SELECT * FROM integrantes WHERE id=:id');
        $busqueda -> bindValue('id',$id);
        $busqueda -> execute();
        $dato=$busqueda -> fetch();
        $unUsuario = new Usuario();
        $unUsuario -> setId($dato['id']);
        $unUsuario -> setCodigo($dato['codigo']);
        $unUsuario -> setNombre($dato['nombre']);
        $unUsuario -> setApellido($dato['apellido']);
        $unUsuario -> setMail($dato['mail']);
        $unUsuario -> setTelefono($dato['telefono']);
        return $unUsuario;
    }

    // METODO BUSCAR TODOS

    function listar(){
        $db = Conexion::conectar();
        $listaUsuarios=[];
        $consulta=$db->query("SELECT * FROM integrantes ORDER BY apellido");
        foreach ($consulta->fetchAll() as $usuario){
            $unUsuario = new Usuario();
            $unUsuario->setId($usuario['id']);
            $unUsuario->setCodigo($usuario['codigo']);
            $unUsuario->setNombre($usuario['nombre']);
            $unUsuario->setApellido($usuario['apellido']);
            $unUsuario->setMail($usuario['mail']);
            $unUsuario->setTelefono($usuario['telefono']);
            $listaUsuarios[]=$unUsuario;
        }
        return $listaUsuarios;
    }
    // METODO MODIFICAR
    
    public function actualizar($usuario){
      $db = Conexion::conectar();
      $edicion= $db->prepare("UPDATE integrantes SET id=:id, codigo=:codigo, nombre=:nombre, apellido=:apellido, mail=:mail, telefono=:telefono WHERE id=:id");
      $edicion->bindValue(':id', $usuario->getId(),PDO::PARAM_INT);
      $edicion->bindValue(':codigo',$usuario->getCodigo(),PDO::PARAM_INT);
      $edicion->bindValue(':nombre',$usuario->getNombre(),PDO::PARAM_STR);
      $edicion->bindValue(':apellido',$usuario->getApellido(),PDO::PARAM_STR);
      $edicion->bindValue(':mail',$usuario->getMail(),PDO::PARAM_STR);
      $edicion->bindValue(':telefono',$usuario->getTelefono(),PDO::PARAM_STR);
      $edicion->execute();
    }

    public function eliminar($id){
        $db=Conexion::conectar();
        $delete=$db->prepare('DELETE FROM integrantes WHERE id=:id');
        $delete->bindValue('id',$id);
        $delete->execute();
    }
}
?>
