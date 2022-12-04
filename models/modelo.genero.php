<?php

class ModelosGenero{
    
    /*=============================================
    tabla GEnero
    =============================================*/

    //funcio crear 

    static public function mdlGenero($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(genero) 
        VALUES (:genero)");

        $stmt->bindParam(":genero", $datos["genero"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarGenero($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;
    }

}