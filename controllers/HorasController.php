<?php
/**
 * Created by PhpStorm.
 * User: hmarm
 * Date: 16/02/2017
 * Time: 1:29 AM
 */
require_once 'models/Horas.php';
require_once 'db/database.php';
class HorasController
{

    public $conectar;


    function index()
    {
        $title = "Horas Trabajadas";
        $modelo = "horas";
        include_once("views/templates/header.php");
        include_once("views/templates/menu.php");
        $horas = new Horas();
        $horas =  $horas->getAll();
        #var_dump($personas);
        include_once "views/formsHoras/index.php";
        include_once("views/templates/footer.php");
    }

    function registrar(){
        if ($_POST) {
            $horas = new Horas();
            foreach ($_POST as $mes=>$cantidad){
                $horas->updateCantidadByMes($mes,$cantidad);
            }
        }
        $this->index();
    }
    function estadisticas()
    {
        $title = "Estadisticas";
        $modelo = "horas";
        include_once("views/templates/header.php");
        include_once("views/templates/menu.php");
        $horas = new Horas();
        $horas =  $horas->getAll();
        #var_dump($personas);
        include_once "views/formsHoras/estadisticas.php";
        include_once("views/templates/footer.php");
    }
}