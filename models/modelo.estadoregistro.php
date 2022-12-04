<?php 

class ModeloEstadoRegistro {
    
    /*=============================================
    tabla EstadoRegistro
    =============================================*/

    //funcio crear 

    static public function mdlEstadoRegistro($tabla, $datos){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(estadoRegistro) 
        VALUES (:estadoRegistro)");

        $stmt->bindParam(":estadoRegistro", $datos["estadoRegistro"], PDO::PARAM_STR);

        if($stmt->execute()){

            return "ok";

        }else{

            print_r(Conexion::conectar()->errorInfo());

        }
        $stmt->close();
        $stmt = null;	

    }

    // funcion mostrar

    static public function mdlSeleccionarEstadoRegistro($tabla){

        $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");

        $stmt->execute();
        return $stmt -> fetchAll();
        $stmt->close();
        $stmt = null;
    }
}