<?php
require_once 'models/Persona.php';
require_once 'db/database.php';
class PersonaController
{

    public $conectar;



    function index()
    {
        $title = "Listado de personas";
        $modelo = "personas";
        include_once ("views/templates/header.php");
        include_once ("views/templates/menu.php");
        $personas = new Persona();
            $personas = $personas->getAll();
            #var_dump($personas);
        include_once "views/formsPersona/list.php";
        include_once ("views/templates/footer.php");
    }

    function create()
    {
        $title = "Registrar persona";
        $modelo = "personas";
        include_once ("views/templates/header.php");
        include_once ("views/templates/menu.php");
        include_once ("views/formsPersona/create.php");
        include_once ("views/templates/footer.php");

    }

    function informe()
    {
        $title = "Informe Persona con Accidentalidad";
        $modelo = "personas";
        include_once ("views/templates/header.php");
        include_once ("views/templates/menu.php");
        $personas = new Persona();
        $personas = $personas->getAllWithAccidente();
        include_once "views/formsPersona/informe.php";
        include_once ("views/templates/footer.php");
    }

    function update()
    {

    }

    function search()
    {

    }

    function view($id)
    {
        $title = "Informe Detalle Persona";
        $modelo = "personas";
        include_once ("views/templates/header.php");
        include_once ("views/templates/menu.php");
        $personas = new Persona();
        $personas = $personas->getById($id);
        $accidente = new Accidente("accidentes");
        $accidentes = $accidente->getAllByPersona($id);
        #var_dump($personas);
        include_once "views/formsPersona/profile.php";
        include_once ("views/templates/footer.php");

    }

    function add()
    {
        if ($_POST)
        {
            $personas = new Persona($this->adapter);
            $personas->setAreaTrabajo($_POST["areaTrabajo"]);
            $personas->setCedula($_POST["cedula"]);
            $personas->setCorreo($_POST["correo"]);
            $personas->setFechaIngreso($_POST["fechaIngreso"]);
            $personas->setNombre($_POST["nombre"]);
            $personas->setCedula($_POST["cedula"]);
            $personas->setSexo($_POST["sexo"]);
            $personas->setFechaNacimiento($_POST["fechaNacimiento"]);
            $personas->setCargo($_POST["cargo"]);

            if($result = $personas->create()){
                $this->index();
            }else{
                var_dump($result);
            };
        }else{
            include_once ("views/templates/header.php");
            include_once ("views/templates/menu.php");
            include_once ("views/403.php");
            include_once ("views/templates/footer.php");
        }

    }

}