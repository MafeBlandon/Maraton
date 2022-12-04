<?php

class ModeloMaraton {
        
    /*=============================================
    tabla hojatiempo
    =============================================*/

    //funcio crear 

    static public function mdlMaraton($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombreMaraton, NombreCiudad, NombreCelebracion, fk_PaisID) 
        VALUES (:NombreMaraton, :NombreCiudad,:NombreCelebracion,:fk_PaisID)");

        $stmt->bindParam(":NombreMaraton", $datos["NombreMaraton"], PDO::PARAM_STR);
        $stmt->bindParam(":NombreCiudad", $datos["NombreCiudad"], PDO::PARAM_STR);
        $stmt->bindParam(":NombreCelebracion", $datos["NombreCelebracion"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_PaisID", $datos["fk_PaisID"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarMaraton($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;
    }

}