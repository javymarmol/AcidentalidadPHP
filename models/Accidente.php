<?php

/**
 * Created by PhpStorm.
 * User: hmarm
 * Date: 9/02/2017
 * Time: 2:18 PM
 */

require_once ("../db/EntidadBase.php");
require_once ("Persona.php");
class Accidente extends EntidadBase
{
    protected $id;
    private $idPersona;
    private $gravedad;
    private $fecha;
    private $tipo;
    private $lesion;
    private $parteCuerpoAfectada;
    private $agente;
    private $descripcion;
    private $mecanismo;
    private $incapacidad;
    private $diasIncapacidad;

    //Getter y Setter

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
    public function getPersona()
    {
        return $this->idPersona;
    }

    /**
     * @return mixed
     */
    public function getGravedad()
    {
        return $this->gravedad;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @return mixed
     */
    public function getAgente()
    {
        return $this->agente;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @return mixed
     */
    public function getMecanismo()
    {
        return $this->mecanismo;
    }

    /**
     * @return mixed
     */
    public function getParteCuerpoAfectada()
    {
        return $this->parteCuerpoAfectada;
    }

    /**
     * @return mixed
     */
    public function getLesion()
    {
        return $this->lesion;
    }

    /**
     * @return mixed
     */
    public function getIncapacidad()
    {
        return $this->incapacidad;
    }

    /**
     * @return mixed
     */
    public function getDiasIncapacidad()
    {
        return $this->diasIncapacidad;
    }

    /**
     * @param mixed $agente
     */
    public function setAgente($agente)
    {
        $this->agente = $agente;
    }

    /**
     * @param mixed $descripcion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    }

    /**
     * @param mixed $diasIncapacidad
     */
    public function setDiasIncapacidad($diasIncapacidad)
    {
        $this->diasIncapacidad = $diasIncapacidad;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @param mixed $gravedad
     */
    public function setGravedad($gravedad)
    {
        $this->gravedad = $gravedad;
    }

    /**
     * @param Persona $idPersona
     */
    public function setPersona(Persona $Persona)
    {
        $this->Persona = $Persona->getId();
    }

    /**
     * @param mixed $incapacidad
     */
    public function setIncapacidad($incapacidad)
    {
        $this->incapacidad = $incapacidad;
    }

    /**
     * @param mixed $mecanismo
     */
    public function setMecanismo($mecanismo)
    {
        $this->mecanismo = $mecanismo;
    }

    /**
     * @param mixed $parteCuerpoAfectada
     */
    public function setParteCuerpoAfectada($parteCuerpoAfectada)
    {
        $this->parteCuerpoAfectada = $parteCuerpoAfectada;
    }

    /**
     * @param mixed $lesion
     */
    public function setLesion($lesion)
    {
        $this->lesion = $lesion;
    }

    /**
     * @param mixed $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }



}