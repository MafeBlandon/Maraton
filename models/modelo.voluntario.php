<?php

class ModeloVoluntario {
    
    /*=============================================
    tabla voluntario
    =============================================*/

    //funcio crear 

    static public function mdlVoluntario($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(Nombres, Apellidos, fk_PaisID, fk_GeneroID) 
        VALUES (:Nombres, :Apellidos,:fk_PaisID,:fk_GeneroID)");

        $stmt->bindParam(":Nombres", $datos["Nombres"], PDO::PARAM_STR);
        $stmt->bindParam(":Apellidos", $datos["Apellidos"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_PaisID", $datos["fk_PaisID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_GeneroID", $datos["fk_GeneroID"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarVoluntario($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;
    }
}