<?php
    class Conexion
    {
        private static $conexion = NULL;

        private function __construct() { }

        public static function conectar(){
            $user='root';
            $pass='';
            $pdo_optional[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
            self::$conexion=new PDO('mysql:host=localhost;dbname=dbtareas',$user,$pass,$pdo_optional);
            return self::$conexion;
        }   
    }
?>