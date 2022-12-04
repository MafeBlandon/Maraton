<?php

class ModelosUsuario {
    /*=============================================
    tabla usuario
    =============================================*/

    //funcio crear 

    static public function mdlUsuario($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Email, Contrasena, Nombre, Apellido, fk_RolID) 
        VALUES (:Email, :Contrasena,:Nombre,:Apellido,:fk_RolID)");

        $stmt->bindParam(":Email", $datos["Email"], PDO::PARAM_STR);
        $stmt->bindParam(":Contrasena", $datos["Contrasena"], PDO::PARAM_STR);
        $stmt->bindParam(":Nombre", $datos["Nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":Apellido", $datos["Apellido"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_RolID", $datos["fk_RolID"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarUsuario($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;
    }

}