<?php

class ModeloPosicion {
    /*=============================================
    tabla posicion
    =============================================*/

    //funcio crear 

    static public function mdlPosicion($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombrePosicion, DescripcionPosicion, TarifaPago) 
        VALUES (:NombrePosicion, :DescripcionPosicion, :TarifaPago)");

        $stmt->bindParam(":NombrePosicion", $datos["NombrePosicion"], PDO::PARAM_STR);
        $stmt->bindParam(":DescripcionPosicion", $datos["DescripcionPosicion"], PDO::PARAM_STR);
        $stmt->bindParam(":TarifaPago", $datos["TarifaPago"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarPosicion($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;	
    }

}
