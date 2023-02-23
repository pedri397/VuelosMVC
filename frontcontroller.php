<?php
include 'function/funciones.php';
session_start();
// include_once __DIR__ . '/models/HabitacionesModel.php';
// include_once __DIR__ . '/views/HabitacionesView.php';
// include_once __DIR__ . '/controllers/HabitacionesController.php';

// include_once __DIR__ . './controllers/CerrarsessionController.php';
            
// include_once __DIR__ . '/models/HotelesModel.php';
// include_once __DIR__ . '/views/HotelesView.php';
// include_once __DIR__ . '/controllers/HotelesController.php';
            
include_once __DIR__ . '/models/PasajesModel.php';
include_once __DIR__ . '/views/PasajesView.php';
include_once __DIR__ . '/controllers/PasajesController.php';
            
include_once __DIR__ . '/models/VuelosModel.php';
include_once __DIR__ . '/views/VuelosView.php';
include_once __DIR__ . '/controllers/VuelosController.php';


define('ACCION_DEFECTO', 'mostrarVuelos');
// // Define el controlador por defecto
define('CONTROLADOR_DEFECTO', 'Vuelos');

// Comprueba la acción a realizar, que llegará en la petición.
// Si no hay acción a realizar lanzará la acción por defecto, que es listar
// Y se carga la acción, llama a la función cargarAccion
function lanzarAccion($controllerObj){
    
    //method_exists() es una función predefinida de PHP que permite comprobar si un 
    //método existe en un objeto dado.
    if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
        cargarAccion($controllerObj, $_GET["action"]);
    } 
    else{
        cargarAccion($controllerObj, ACCION_DEFECTO);
        //O añadir una página indicando el error de la acción
        //die("Se ha cargado una acción errónea");
    }
}

// Lo que hace es ejecutar una función que va a existir en el controlador
// y que se llama como la acción. Recibe un objeto controlador.
function cargarAccion($controllerObj, $action){
    $accion=$action;
    $controllerObj->$accion();
}


// Carga el controlador especificado y devuelve una instancia del mismo
function cargarControlador($nombreControlador) {
    $controlador = $nombreControlador . 'Controller';
    if (class_exists($controlador)) {
        return new $controlador();
    } else {
        // Si el controlador no existe, se lanza una excepción
        //O añadir una página indicando el error del controlador
        die ("controlador no válido");
    }
}

// Carga el controlador y la acción correspondientes
if(isset($_GET["controller"])){
    $controllerObj=cargarControlador($_GET["controller"]);
    lanzarAccion($controllerObj);
}else{
    $controllerObj=cargarControlador(CONTROLADOR_DEFECTO);
    lanzarAccion($controllerObj);
}

