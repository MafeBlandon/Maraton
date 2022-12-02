<?php


require_once "controlador/plantilla.controlador.php";

require_once "controlador/formularioregistro.controlador.php";
require_once "modelo/formularioregistro.modelo.php";


//tabla caridad
require_once "controllers/caridadcontroller.php";
require_once "models/modelo.php";


//tabla corredor
require_once "controllers/corredorcontroller.php";
require_once "models/modelo.php";

//tabla estado Registro
require_once "controllers/estadoregistrocontroller.php";
require_once "models/modelo.php";


//tabla evento
require_once "controllers/eventocontroller.php.php";
require_once "models/modelo.php";

//tabla genero
require_once "controllers/generocontroller.php";
require_once "models/modelo.php";

//tabla hoja de tiempo
require_once "controllers/hojatiempocontroller.php";
require_once "models/modelo.php";

//tabla Kit Competicion 
require_once "controllers/kitcompeticioncontroller.php";
require_once "models/modelo.php";

//tabla Maraton
require_once "controllers/maratoncontroller.php";
require_once "models/modelo.php";


//tabla Pais
require_once "controllers/paiscontroller.php";
require_once "modelo/areamodelo.php";

//tabla patrocinio
require_once "controllers/patrociniocontroller.php";
require_once "modelo/areamodelo.php";

//tabla Personal
require_once "controllers/personalcontroller.php";
require_once "modelo/areamodelo.php";


//tabla Posicion
require_once "controllers/posicioncontroller.php";
require_once "modelo/areamodelo.php";

//tabla Registro
require_once "controllers/registrocontroller.php";
require_once "modelo/areamodelo.php";

//tabla Registro Evento
require_once "controllers/registroeventocontroller.php";
require_once "modelo/areamodelo.php";


//tabla Rol
require_once "controllers/rolcontroller.php";
require_once "modelo/areamodelo.php";


//tabla Tipo Evento
require_once "controllers/tipoeventocontroller.php";
require_once "modelo/areamodelo.php";


//tabla Usuario
require_once "controllers/usuariocontroller.php";
require_once "modelo/areamodelo.php";


//tabla Voluntario
require_once "controllers/voluntariocontroller.php";
require_once "modelo/areamodelo.php";


//para ver si esta la conexion
require_once "config/conexion.php";

$conexion = Conexion::conectar();
echo '<pre'; print_r($conexion); echo "</pre>";
