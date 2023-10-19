<?php 
    class Conexion{
        static public function conectar(){
            $link = new PDO("mysql:host=localhost:3307;dbname=web-4c", "soporte3c", "soporte3c");
            $link -> exec("set names utf8");
            return $link;
        }
    }
