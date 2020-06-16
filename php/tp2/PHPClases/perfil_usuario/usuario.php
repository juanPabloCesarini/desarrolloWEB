<?php
    class Usuario{
        private $id;
        private $codigo;
        private $nombre;
        private $apellido;
        private $mail;
        private $telefono;

        function __construct(){}

        public function getId(){
                return $this->id;
        }

        public function setId($id){
                $this->id = $id;
                return $this;
        }

        public function getCodigo(){
                return $this->codigo;
        }

        public function setCodigo($codigo){
                $this->codigo = $codigo;
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

        public function getMail(){
                return $this->mail;
        }

        public function setMail($mail){
                $this->mail = $mail;
                return $this;
        }

        public function getTelefono(){
                return $this->telefono;
        }

        public function setTelefono($telefono){
                $this->telefono = $telefono;
                return $this;
        }
    }
?>
