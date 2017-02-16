<?php

/**
 * Created by PhpStorm.
 * User: hmarm
 * Date: 8/02/2017
 * Time: 5:35 AM
 */

require_once("db/EntidadBase.php");

class Persona extends EntidadBase
{
    //Propiedades
    protected $id;
    public $nombre;
    public $cedula;
    public $sexo;
    public $correo;
    public $fechaIngreso;
    public $areaTrabajo;
    public $estado;
    public $cargo;
    public $fechaNacimiento;
    private $table;

    //Creamos el constructor
    public function __construct()
    {
        $table = "personas";
        parent::__construct($table);
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

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    public function getCargo()
    {
        return $this->cargo;
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

    public function setCargo($cargo)
    {
        $this->cargo = $cargo;
    }

    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function cambiaFechaAmysql($fecha)
    {
        ereg("([0-9]{1,2})/([0-9]{1,2})/([0-9]{2,4})", $fecha, $mifecha);
        $lafecha = $mifecha[3] . "-" . $mifecha[1] . "-" . $mifecha[2];
        return $lafecha;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }


//Fin Getter y Setter

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
        $this->query = "INSERT INTO personas
                        (nombres, cedula, sexo, fechaNacimiento, correo, fechaIngreso, areaTrabajo, cargo, estado)
                        VALUES 
                        ('" . $this->nombre . "',
                         '" . $this->cedula . "',
                         '" . $this->sexo . "',
                         '" . $this->cambiaFechaAmysql($this->fechaNacimiento) . "',
                         '" . $this->correo . "',
                         '" . $this->cambiaFechaAmysql($this->fechaIngreso) . "',
                         '" . $this->areaTrabajo . "',
                         '" . $this->cargo . "',
                         'A')";
        //$con = new EntidadBase($this->table);
        $con = $this->db();
        #$mysqli =  $con->db();
        $save = $con->query($this->query);
        if (!$save) {
            throw new Exception(mysqli_error($con) . "[ $this->query]");
        }
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


    public function getAll()
    {
        /*
        $query = "SELECT id, nombres, cedula, correo, fechaNacimiento, areaTrabajo, sexo, cargo, fechaIngreso 
                  FROM ".$this->table." 
                  WHERE estado='A'";
*/
        $con = $this->db();
        #var_dump($this->table);

        $res = $con->query("SELECT id, nombres, cedula, correo, fechaNacimiento, areaTrabajo, sexo, cargo, fechaIngreso 
                              FROM personas ORDER BY id ASC");
        while ($row = $res->fetch_assoc()) {
            $resultSet[] = $row;
        }
        return $resultSet;

    }

    public function getById($id)
    {
        $query = $this->db()->query("SELECT id, nombres, cedula, correo, fechaNacimiento, areaTrabajo, sexo, cargo, fechaIngreso
                  FROM personas WHERE id=$id");

        if ($row = $query->fetch_object()) {
            #$resultSet=$row;
            $persona = new Persona();
            $persona->setCedula($row->cedula);
            $persona->setCargo($row->cargo);
            $persona->setCorreo($row->correo);
            $persona->setNombre($row->nombres);
            $persona->setFechaNacimiento($row->fechaNacimiento);
            $persona->setSexo($row->sexo);
            $persona->setAreaTrabajo($row->areaTrabajo);
            $persona->setFechaIngreso($row->fechaIngreso);
            $persona->setId($row->id);
            $persona->setEstado($row->estado);
        }


        return $persona;
        #return parent::getById($id); // TODO: Change the autogenerated stub
    }

    public function getAllWithAccidente()
    {
        $con = $this->db();

        $res = $con->query("SELECT id, nombres, cedula, correo, fechaNacimiento, areaTrabajo, sexo, cargo, fechaIngreso 
                              FROM personas
                               WHERE id in (
                               SELECT DISTINCT idEmpleado
                               FROM accidentes)
                               ORDER BY id ASC");
        while ($row = $res->fetch_assoc()) {
            $resultSet[] = $row;
        }
        return $resultSet;

    }

    public function countByMes($mes)
    {
        $con = $this->db();
        $res = $con->query("SELECT COUNT(id) as total
                            FROM personas
                            WHERE month(fechaIngreso) <= ".$mes);
        $res=$res->fetch_array();

        return $res["total"];

    }


}