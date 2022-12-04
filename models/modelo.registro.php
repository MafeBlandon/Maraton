<?php

class ModeloRegistro{
    
    /*=============================================
    tabla personal
    =============================================*/

    //funcio crear 

    static public function mdlRegistro($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(FechaRegistro, Costo, ObjetivoPatrocinio, fk_CorredorID, fk_kitID,fk_EstadoRegistroID,fk_CaridadID) 
        VALUES (:FechaRegistro, :Costo, :ObjetivoPatrocinio, :fk_CorredorID, :fk_kitID, :fk_EstadoRegistroID, :fk_CaridadID)");

        $stmt->bindParam(":FechaRegistro", $datos["FechaRegistro"], PDO::PARAM_STR);
        $stmt->bindParam(":Costo", $datos["Costo"], PDO::PARAM_STR);
        $stmt->bindParam(":ObjetivoPatrocinio", $datos["ObjetivoPatrocinio"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_CorredorID", $datos["fk_CorredorID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_kitID", $datos["fk_kitID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_EstadoRegistroID", $datos["fk_EstadoRegistroID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_CaridadID", $datos["fk_CaridadID"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarRegistro($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;
    }
}