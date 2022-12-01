<?php

class ControladorMaraton{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroMaraton(){

		if(isset($_POST[""])){

			$tabla = "";

			$datos = array("" => $_POST[""],
				           "" => $_POST[""],
				           "" => $_POST[""]);

			$respuesta = //ModeloFormularios::mdlRegistro($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroMaraton($item, $valor){

		$tabla = "";

		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroMaraton(){

		if(isset($_POST[""])){

			if($_POST[""] != ""){			

				$password = $_POST[""];

			}else{

				$password = $_POST[""];
			}

			$tabla = "";

			$datos = array("id" => $_POST[""],
							"" => $_POST[""],
				           "" => $_POST[""],
				           "" => $password);

			$respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);

			return $respuesta;

		}


	}

	/*=============================================
	Eliminar Registro
	=============================================*/
	public function ctrEliminarRegistroMaraton(){

		if(isset($_POST[""])){

			$tabla = "";
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