<?php
/**
 * Created by PhpStorm.
 * User: hmarm
 * Date: 7/02/2017
 * Time: 12:27 AM
 */
require_once "models/Accidente.php";
require_once "models/Imagen.php";
require_once 'db/database.php';

class AccidenteController
{

    function index()
    {
        $title = "Listado de accidentes";
        $modelo = "accidentes";
        include_once("views/templates/header.php");
        include_once("views/templates/menu.php");
        $accidente = new Accidente("accidentes");
        $accidentes = $accidente->getAll();
        #var_dump($personas);
        include_once "views/formsAccidente/list.php";
        include_once("views/templates/footer.php");
    }

    function create($id = "")
    {
        $title = "Registrar accidente";
        $modelo = "accidentes";
        include_once("views/templates/header.php");
        include_once("views/templates/menu.php");
        if ($id != null) {
            $persona = new Persona();
            $person = $persona->getById($id);
            include_once("views/formsAccidente/create.php");
        } else {
            include_once("views/403.php");
        }
        include_once("views/templates/footer.php");

    }


    function delete()
    {

    }

    function update()
    {

    }

    function search()
    {

    }

    function view($id)
    {
        $title = "Informe Accidentalidad";
        $modelo = "accidentes";
        include_once ("views/templates/header.php");
        include_once ("views/templates/menu.php");
        $accidente = new Accidente("accidentes");
        $accidente = $accidente->getById($id);
        #var_dump($accidente);
        $personas = new Persona();
        $personas = $personas->getById($accidente->getIdPersona());
        #var_dump($personas);
        include_once "views/formsAccidente/detalle.php";
        include_once ("views/templates/footer.php");


    }

    function add()
    {
        if ($_POST) {
            $accidentes = new Accidente($this->adapter);
            $accidentes->setLesion($_POST["lesion"]);
            $accidentes->setParteCuerpoAfectada($_POST["parteCuerpoAfectada"]);
            $accidentes->setGravedad($_POST["gravedad"]);
            $accidentes->setMecanismo($_POST["mecanismo"]);
            $accidentes->setAgente($_POST["agente"]);
            $accidentes->setDescripcion($_POST["descripcion"]);
            $accidentes->setFecha($_POST["fecha"]);;
            $accidentes->setTipo($_POST["tipo"]);
            $accidentes->setLesion($_POST["lesion"]);
            $accidentes->setLugar($_POST["lugar"]);
            $accidentes->setIncapacidad($_POST["incapacidad"]);
            if ($accidentes->getIncapacidad()){
                $accidentes->setDiasIncapacidad($_POST["diasIncapacidad"]);
            }
            $accidentes->setIdPersona($_POST["idPersona"]);

            if ($result = $accidentes->create()) {

                if (isset($_FILES['files'])){

                    $ruta = "images/upload/";
                    $hoy = getdate();
                    $imagen = new Imagen();
                    $imagen->setIdAccidente($result);

                    $cantidad= count($_FILES["files"]["tmp_name"]);
                    for ($i=0; $i<$cantidad; $i++){
                        //Comprobamos si el fichero es una imagen
                        if ($_FILES['files']['type'][$i]=='image/png' || $_FILES['files']['type'][$i]=='image/jpeg'){

                            $sufijo = md5(rand()*$hoy["seconds"]);
                            $nombre = $sufijo."_".$_FILES["files"]["name"][$i];
                            //Subimos el fichero al servidor
                            move_uploaded_file($_FILES["files"]["tmp_name"][$i],$ruta.$nombre);
                            $validar=true;
                            $imagen->setNombre($nombre);
                            $imagen->save();
                        }
                        else $validar=false;


                    }
                }
                $this->index();
            } else {
                var_dump($result);
            };
        } else {
            include_once("views/templates/header.php");
            include_once("views/templates/menu.php");
            include_once("views/403.php");
            include_once("views/templates/footer.php");
        }

    }
}