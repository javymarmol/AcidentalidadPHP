<?php
include_once 'controllers/PersonaController.php';
//include_once 'controllers/GreetingController.php';
//include_once 'models/Greeting.php';

/**
 * [parseUrl Parseamos la url en trozos]
 * @return [type] [description]
 */
function parseUrl()
{
    if(isset($_GET["url"]))
    {
        return explode("/", filter_var(rtrim($_GET["url"], "/"), FILTER_SANITIZE_URL));
    }
}

$url =  explode ("/", $_SERVER['REQUEST_URI']);
var_dump($url);

$module = $url[1];
$action = $url[2];
echo $module;


switch($module){
    case 'persona':
        $controller = new PersonaController();
        break;

    case 'accidente':
        $controller = new Accidente();
        break;

    default:
        $controller = new PersonaController();
        $controller->index();
}

