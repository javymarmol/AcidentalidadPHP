<?php

/**
 * Created by PhpStorm.
 * User: hmarm
 * Date: 8/02/2017
 * Time: 5:35 AM
 */

require_once ("../db/EntidadBase.php");

class Persona extends EntidadBase
{
    //Propiedades
    protected  $id;
    public $nombre;
    public $cedula;
    public $sexo;
    public $correo;
    public $fechaIngreso;
    public $areaTrabajo;
    public $estado;

    /*
    function __construct($nombre,$cedula, $sexo, $correo, $fechaIngreso, $areaTrabajo)
    {
        $this->nombre = $nombre;
        $this->cedula = $cedula;
        $this->sexo = $sexo;
        $this->correo = $correo;
        $this->fechaIngreso = $fechaIngreso;
        $this->areaTrabajo = $areaTrabajo;
    }
*/

    //Creamos el constructor
    public function __construct($adapter) {
        $table="personas";
        parent::__construct($table, $adapter);
    }

    //Getter y Setter

    public function getId()
    {
        return $this->id;
    }

    public function getCedula()
    {
        return $this->cedula;
    }

    public function getCorreo()
    {
        return $this->correo;
    }

    public function getAreaTrabajo()
    {
        return $this->areaTrabajo;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    }

    public function getSexo()
    {
        return $this->sexo;
    }

    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function setCorreo($correo)
    {
        $this->correo = $correo;
    }

    public function setSexo($sexo)
    {
        $this->sexo = $sexo;
    }

    public function setAreaTrabajo($areaTrabajo)
    {
        $this->areaTrabajo = $areaTrabajo;
    }

    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;
    }

    //Getter y Setter

    //Traer datos de una persona
    /*
     * public function getBy($campo="", $texto="")
    {
        if (!isset($texto)&&!isset($campo)){
            $this->query = "select id, nombre, cedula, sexo, correo, fechaIngreso, areaTrabajo, estado
                            FROM personas
                            WHERE '$campo' = '$texto'";
            $this->get_result_from_query();

            if(count($this->rows == 1)){
                foreach ($this->rows[0] as $propiedad=>$valor){
                    $this->propiedad = $valor;
                }
            }
        }
    }
    */

    //crear una nueva persona
    public function create()
    {
        $query = "INSERT INTO personas
                        (nombre, cedula, sexo, correo, fechaIngreso, areaTrabajo, estado)
                        VALUES 
                        ('" . $this->nombre . "',
                         '" . $this->cedula . "',
                         '" . $this->sexo . "',
                         '" . $this->correo . "',
                         '" . $this->fechaIngreso . "',
                         '" . $this->areaTrabajo . "',
                         '1')";
        $save = $this->db()->query($query);

      return $save;
    }


    //modificar una persona
    /*
    public function edit($user_data=array())
    {
                foreach ($user_data as $campo => $valor) {
                    $$campo = $valor;
                }
                $this->query = "UPDATE personas
                                SET nombre = '$nombre',
                                cedula = '$cedula',
                                 sexo = '$sexo',
                                  correo = '$correo',
                                   fechaIngreso = '$fechaIngreso',
                                    areaTrabajo = '$areaTrabajo'
                                WHERE id = '$id'";
                $this->execute_single_query();
                $this->mensaje = "Persona modificada exitosamnete";
    }

    //modificar una persona
    public function delete($id = "")
    {
        $this->query = "UPDATE personas
                                SET estado = 0,
                                WHERE id = '$id'";
        $this->execute_single_query();
        $this->mensaje = "Persona eliminada";
    }


    protected function setEstado($estado)
    {
        $this->estado = $estado;
    }
*/
/*
    public function getAll()
    {
        $query = "SELECT id, nombre, cedula FROM personas";

        $db = require_once ("../db/database.php");
        $mysqli = $db->conectar();
        if ($result = $mysqli->query($query)) {
            while ($persona = $result->fetch_object('Persona')) {
                echo $persona->info() . "\n";
            }
        }
        while ($row = $query->fetch_object()) {
            $resultSet[]=$row;
        }

        return $resultSet;

    }
*/
}