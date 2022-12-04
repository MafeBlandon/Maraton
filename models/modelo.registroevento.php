<?php

class ModeloRegistroEvento {
        
    /*=============================================
    tabla hojatiempo
    =============================================*/

    //funcio crear 

    static public function mdlRegistroEvento($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(NumDorsal, TiempoCarrera, fk_RegistroID, fk_EventoID) 
        VALUES (:NumDorsal, :TiempoCarrera,:fk_RegistroID,:fk_PersonalID)");

        $stmt->bindParam(":NumDorsal", $datos["NumDorsal"], PDO::PARAM_STR);
        $stmt->bindParam(":TiempoCarrera", $datos["TiempoCarrera"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_RegistroID", $datos["fk_RegistroID"], PDO::PARAM_STR);
        $stmt->bindParam(":fk_EventoID", $datos["fk_EventoID"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarRegistroEvento($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;
    }
    static public function mdlEliminarRegistroEvento($tabla, $valor){
	
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE RegistroID = :RegistroID");
    
        $stmt->bindParam(":RegistroID", $valor, PDO::PARAM_STR);
    
        if($stmt->execute()){
    
            return "ok";
    
        }else{
    
            print_r(Conexion::conectar()->errorInfo());
    
        }
    
        $stmt->close();
    
        $stmt = null;	
    }
}