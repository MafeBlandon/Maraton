<?php

class ModeloRol {
    
    /*=============================================
    tabla Rol
    =============================================*/

    //funcio crear 

    static public function mdlRol($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(rol) 
        VALUES (:rol)");

        $stmt->bindParam(":rol", $datos["rol"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarRol($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;
    }
    static public function mdlEliminarRol($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE rollID = :rollID");
    
        $stmt->bindParam(":rollID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    
}