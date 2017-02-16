<?php
define('ROOT', "/PruebaIngreso");
include_once 'controllers/PersonaController.php';
include_once 'controllers/AccidenteController.php';
include_once 'controllers/HorasController.php';

/**
 * [parseUrl Parseamos la url en trozos]
 * @return [type] [description]
 */
function parseUrl()
{
    if (isset($_GET["url"])) {
        return explode("/", filter_var(rtrim($_GET["url"], "/"), FILTER_SANITIZE_URL));
    }
}

$url = explode("/", $_SERVER['REQUEST_URI']);
//var_dump($url);

$module = $url[2];
if (isset($url[3])) {
    $action = $url[3];
    if (isset($url[4])) {
        $parameter = $url[4];
    }
}
//echo ROOT;


switch ($module) {
    case 'personas':
        $controller = new PersonaController();
        if (isset($action)) {

            if (method_exists($controller, $action)) {
                if (isset($parameter)) {
                    $controller->$action($parameter);
                } else {
                    $controller->$action();
                }
            } else {
                include_once('views/404.php');
            }
        } else {
            $controller->index();
        }
        break;

    case 'accidentes':
        $controller = new AccidenteController();
        if (isset($action)) {

            if (method_exists($controller, $action)) {
                if (isset($parameter)) {
                    $controller->$action($parameter);
                } else {
                    $controller->$action();
                }
                #echo "entro".$action;
            } else {
                include_once('views/404.php');
            }
        } else {
            $controller->index();
        }
        break;
    case 'horas':

        $controller = new HorasController();
        if (isset($action)) {

            if (method_exists($controller, $action)) {
                $controller->$action();
            } else {
                include_once('views/404.php');
            }
        } else {
            $controller->index();
        }
        break;


    case '':
        $controller = new PersonaController();
        $controller->index();
        break;
    default:
        include_once('views/404.php');
}

