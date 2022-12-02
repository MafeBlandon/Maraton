<?php

class ControladorPais{

	/*=============================================
	Registro
	=============================================*/

	static public function ctrRegistroPais(){

		if(isset($_POST[""])){

			$tabla = "TBL_Pais";

			$datos = array("NombrePais" => $_POST[""],
				           "BanderaPais" => $_POST[""]);//ES IMG

			$respuesta = //ModeloFormularios::mdlRegistro($tabla, $datos);

			return $respuesta;

		}

	}

	/*=============================================
	Seleccionar Registros
	=============================================*/

	static public function ctrSeleccionarRegistroPais($item, $valor){

		$tabla = "TBL_Pais";

		$respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

		return $respuesta;

	}


     /*=============================================
	Actualizar Registro
	=============================================*/
	static public function ctrActualizarRegistroPais(){

		if(isset($_POST[""])){

			if($_POST[""] != ""){			

				$password = $_POST[""];

			}else{

				$password = $_POST[""];
			}

			$tabla = "TBL_Pais";

			$datos = array("CodigoPais" => $_POST[""],
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
	public function ctrEliminarRegistroPais(){

		if(isset($_POST[""])){

			$tabla = "TBL_Pais";
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