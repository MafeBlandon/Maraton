<?php

class ControladorCaridad{



 

 


	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroCaridad(){

		if(isset($_POST[""])){

			$tabla = "TBL_Caridad";

			$datos = array("NombreCaridad " => $_POST[""],
				           "DescripcionCaridad" => $_POST[""],
				           "LogoCaridad" => $_POST[""]);//es IMG

			$respuesta = //ModeloFormularios::mdlRegistro($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroCaridad($item, $valor){

		$tabla = "TBL_Caridad";

		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroCaridad(){

		if(isset($_POST[""])){

			if($_POST[""] != ""){			

				$password = $_POST[""];

			}else{

				$password = $_POST[""];
			}

			$tabla = "TBL_Caridad";

			$datos = array("CaridadID" => $_POST[""],
							"NombreCaridad" => $_POST[""],
				           "DescripcionCaridad" => $_POST[""]);

			$respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroCaridad(){

		if(isset($_POST[""])){

			$tabla = "TBL_Caridad";
			$valor = $_POST[""];

			$respuesta = ModeloFormularios::mdlEliminarRegistro($tabla, $valor);

			if($respuesta == "ok"){

				echo '<script>

					if ( window.history.replaceState ) {

						window.history.replaceState( null, null, window.location.href );

					}

					window.location = "index.php?pagina=inicio";

				</script>';

			}

		}

	}



}