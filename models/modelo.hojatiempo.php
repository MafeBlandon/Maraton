<?php

class ModeloHojatiempo {
        
    /*=============================================
    tabla hojatiempo
    =============================================*/

    //funcio crear 

    static public function mdlHojatiempo($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(FechaInicio, FechaFinal, ValorPagar, fk_PersonalID) 
        VALUES (:FechaInicio, :FechaFinal,:ValorPagar,:fk_PersonalID)");

        $stmt->bindParam(":FechaInicio", $datos["FechaInicio"], PDO::PARAM_STR);
        $stmt->bindParam(":FechaFinal", $datos["FechaFinal"], PDO::PARAM_STR);
        $stmt->bindParam(":ValorPagar", $datos["ValorPagar"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_PersonalID", $datos["fk_PersonalID"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarHojatiempo($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;
    }

}