<?php
    class Conexion
    {
        private static $conexion = NULL;

        private function __construct() { }

        public static function conectar(){
            $user='p4000324';
            $pass='panTa19gRue91LiKo';
            $pdo_optional[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
            self::$conexion=new PDO('mysql:host=localhost;dbname=p4000324_tareas',$user,$pass,$pdo_optional);
            return self::$conexion;
        }   
    }
?>