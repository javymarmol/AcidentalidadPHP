<?php
/**
 * Created by PhpStorm.
 * User: hmarm
 * Date: 16/02/2017
 * Time: 1:03 AM
 */
require_once ("db/EntidadBase.php");
require_once ("models/Persona.php");
require_once ("models/Accidente.php");
class Horas extends EntidadBase
{
    private $id;
    private $mes;
    private $cantidad;

    //Creamos el constructor
    public function __construct() {
        $table="horas";
        parent::__construct($table);
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @return mixed
     */
    public function getMes()
    {
        return $this->mes;
    }

    /**
     * @return mixed
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * @param mixed $mes
     */
    public function setMes($mes)
    {
        $this->mes = $mes;
    }

    /**
     * @param mixed $cantidad
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }




    public function getCantidadByMes($mes)
    {
        $con =  $this->db();

        $res = $con->query("SELECT cantidad
                            FROM horas
                            WHERE mes = '".$mes."'");
        return $res;
    }

    public function getAll()
    {

        $con =  $this->db();

        $res = $con->query("SELECT id, mes, cantidad
                            FROM horas
                            ORDER BY id ASC");

        $i=0;
        while ($row = $res->fetch_assoc()) {
            $horas =  new Horas();
            $horas->setId($row["id"]);
            $horas->setMes($row["mes"]);
            $horas->setCantidad($row["cantidad"]);
            $resultSet[$i] = $horas;
            $i++;
        }
        return $resultSet;

    }
    public function updateCantidadByMes($mes,$cantidad)
    {
        $con =  $this->db();

        $res = $con->query("UPDATE horas
                            SET cantidad=".$cantidad."
                            WHERE mes = '".$mes."'");
        return $res;
    }

    public function getTasaIncidencia($mes)
    {
        $persona = new Persona();
        $trabajadoresxMes = $persona->countByMes($mes);
        $accidente = new Accidente("accidentes");
        $accidentesxMes = $accidente->countByMes($mes);
        if($trabajadoresxMes != false && $accidentesxMes != false){
                $result = ($accidentesxMes/$trabajadoresxMes)*240000;

        }else{
            $result = 0;
        }

        return $result ;

    }

    public function getIndiceSeveridad($mes)
    {

        $accidente = new Accidente("accidentes");
        $diasIncapacidadxMes = $accidente->diasIncapacidadByMes($mes);
        $horasTrabajadas = $this->getCantidadByMes($mes);
        $result = ($diasIncapacidadxMes/$horasTrabajadas)*100;

        return $result;

    }

    public function getIndiceFrecuencia($mes)
    {

        $accidente = new Accidente("accidentes");
        $accidentesxMes = $accidente->countByMes($mes);
        $horasTrabajadas = $this->getCantidadByMes($mes);
        $result = ($accidentesxMes/$horasTrabajadas)*100;
        return $result;
    }


}