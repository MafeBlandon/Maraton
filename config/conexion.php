<?php

class  Conexion{

     static public function   conectar(){
          #PDO(nombre de mi servidor: nombre de la base de datos, nombre del usuario,contraseña)

          $link = new PDO("mysql:host=localhost;dbname=","root","");

          $link->exec("set names utf8");
          return $link;

     }
}