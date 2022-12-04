<?php

require_once "models/modelo.hojatiempo.php";

class ControladorHojaTiempo{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroHojaTiem(){

		if(isset($_POST[""])){

			$tabla = "TBL_HojaTiempo";

			$datos = array("FechaInicio" => $_POST[""],
				           "FechaFinal" => $_POST[""],
						   "ValorPagar" => $_POST[""],
						   "FK_PersonalID" => $_POST[""]);

			$respuesta = //ModeloFormularios::mdlRegistro($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroHojaTiem($item, $valor){

		$tabla = "TBL_HojaTiempo";

		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroHojaTiem(){

		if(isset($_POST[""])){

			if($_POST[""] != ""){			

				$password = $_POST[""];

			}else{

				$password = $_POST[""];
			}

			$tabla = "TBL_HojaTiempo";

			$datos = array("HojaID" => $_POST[""],
							"FechaInicio" => $_POST[""],
							"FechaFinal" => $_POST[""],
							"ValorPagar" => $_POST[""],
							"FK_PersonalID" => $_POST[""]);

			$respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroHojaTiem(){

		if(isset($_POST[""])){

			$tabla = "TBL_HojaTiempo";
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