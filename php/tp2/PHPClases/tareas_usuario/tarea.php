<?php
    class Tarea{
        private $idTareas;
        private $fecha;
        private $tiempo;
        private $descripcion;
        private $observaciones;
        private $idIntegrantes;
        private $nombre;
        private $apellido;

        function __construct(){}

        
        public function getIdTareas(){
                return $this->idTareas;
        }

        public function setIdTareas($idTareas){
                $this->idTareas = $idTareas;
                return $this;
        }

        public function getFecha(){
                return $this->fecha;
        }

        public function setFecha($fecha){
                $this->fecha = $fecha;
                return $this;
        }

        public function getDescripcion(){
                return $this->descripcion;
        }

        public function setDescripcion($descripcion){
                $this->descripcion = $descripcion;
                return $this;
        }

        public function getObservaciones(){
                return $this->observaciones;
        }

        public function setObservaciones($observaciones){
                $this->observaciones = $observaciones;
                return $this;
        }

        public function getIdIntegrantes(){
                return $this->idIntegrantes;
        }

        public function setIdIntegrantes($idIntegrantes){
                $this->idIntegrantes = $idIntegrantes;
                return $this;
        }

        public function getTiempo(){
                return $this->tiempo;
        }

        public function setTiempo($tiempo){
                $this->tiempo = $tiempo;
                return $this;
        }

        public function getNombre(){
                return $this->nombre;
        }

        public function setNombre($nombre){
                $this->nombre = $nombre;
                return $this;
        }

        public function getApellido(){
                return $this->apellido;
        }

        public function setApellido($apellido){
                $this->apellido = $apellido;
                return $this;
        }
    }
?>