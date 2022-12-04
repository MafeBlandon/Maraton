<?php

class ModeloEvento{
    
    /*=============================================
    tabla personal
    =============================================*/

    //funcio crear 

    static public function mdlEvento($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombreEvento, FechaInicio, Valor, ParticiantesMax, fk_MaratonID,fk_TipoEventoID) 
        VALUES (:NombreEvento, :FechaInicio, :Valor, :ParticiantesMax, :fk_MaratonID, :fk_TipoEventoID)");

        $stmt->bindParam(":NombreEvento", $datos["NombreEvento"], PDO::PARAM_STR);
        $stmt->bindParam(":FechaInicio", $datos["FechaInicio"], PDO::PARAM_STR);
        $stmt->bindParam(":Valor", $datos["Valor"], PDO::PARAM_STR);
        $stmt->bindParam(":ParticiantesMax", $datos["ParticiantesMax"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_MaratonID", $datos["fk_MaratonID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_TipoEventoID", $datos["fk_TipoEventoID"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarEvento($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;
    }
}