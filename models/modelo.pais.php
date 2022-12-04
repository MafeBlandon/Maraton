<?php

class ModeloPais {

    /*=============================================
    tabla pais
    =============================================*/

    //funcio crear 

    static public function mdlPais($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NombrePais, BanderaPais) 
        VALUES (:NombrePais, :BanderaPais)");

        $stmt->bindParam(":NombrePais", $datos["NombrePais"], PDO::PARAM_STR);
        $stmt->bindParam(":BanderaPais", $datos["BanderaPais"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarPais($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;	
    }
    static public function mdlEliminarPais($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE PaisID = :PaisID");
    
        $stmt->bindParam(":PaisID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    }
}
