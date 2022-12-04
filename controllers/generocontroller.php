<?php
require_once "models/modelo.genero.php";

class ControladorGenero{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroGenero(){

		if(isset($_POST[""])){

			$tabla = "TBL_Genero";

			$datos = array("Genero" => $_POST[""]);

			$respuesta = ModelosGenero::mdlGenero($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroGenero($item, $valor){

		$tabla = "TBL_Genero";

		$respuesta = ModelosGenero::mdlSeleccionarGenero($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroGenero(){

		if(isset($_POST[""])){

			if($_POST[""] != ""){			

				$password = $_POST[""];

			}else{

				$password = $_POST[""];
			}

			$tabla = "TBL_Genero";

			$datos = array("idFALTA" => $_POST[""],
							"Genero" => $_POST[""]);

			$respuesta = ModelosGenero::mdlActualizarGenero($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroGenero(){

		if(isset($_POST[""])){

			$tabla = "TBL_Genero";
			$valor = $_POST[""];

			$respuesta = ModelosGenero::mdlEliminarGenero($tabla, $valor);

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