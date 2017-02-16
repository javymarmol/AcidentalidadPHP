<?php

/**
 * Created by PhpStorm.
 * User: hmarm
 * Date: 9/02/2017
 * Time: 2:18 PM
 */

require_once ("db/EntidadBase.php");
require_once ("models/Persona.php");
class Accidente extends EntidadBase
{
    protected $id;
    private $idPersona;
    private $gravedad;
    private $fecha;
    private $tipo;
    private $lesion;
    private $lugar;
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
    public function getIdPersona()
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
    public function getLugar()
    {
        return $this->lugar;
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
     * @param mixed $idPersona
     */
    public function setIdPersona($idPersona)
    {
        $this->idPersona = $idPersona;
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

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $lugar
     */
    public function setLugar($lugar)
    {
        $this->lugar = $lugar;
    }



    public function getAll()
    {
        $con =  $this->db();

        $res = $con->query("SELECT p.id idPersona, p.nombres, p.cedula, p.correo, p.fechaNacimiento, p.areaTrabajo, p.sexo, p.cargo, p.fechaIngreso,
                              a.id idAccidente, a.gravedad, a.fecha, a.lugar, a.tipo, a.lesion, a.parteCuerpoAfectada, a.agente, a.descripcion, a.mecanismo,
                              a.incapacidad, a.diasIncapacidad
                            FROM accidentes a
                              inner join personas p
                                on a.idEmpleado = p.id
                            WHERE p.estado = 'A'
                            ORDER BY a.id ASC");

        $i=0;
        while ($row = $res->fetch_assoc()) {

            //instanciamos la persona para pasarle todos los parametros
            $persona = new Persona();
            $persona->setCedula($row["cedula"]);
            $persona->setSexo($row["sexo"]);
            $persona->setCargo($row["cargo"]);
            $persona->setNombre($row["nombre"]);
            $persona->setCorreo($row["correo"]);
            $persona->setAreaTrabajo($row["areaTrabajo"]);
            $persona->setFechaIngreso($row["fechaIngreso"]);
            $persona->setFechaNacimiento($row["fechaNacimiento"]);
            $persona->setId($row["idPersona"]);

            //Instanciamos un accidente
            $accidente = new Accidente("accidentes");
            $accidente->setAgente($row["agente"]);
            $accidente->setId($row["idAccidente"]);
            $accidente->setGravedad($row["gravedad"]);
            $accidente->setFecha($row["fecha"]);
            $accidente->setLesion($row["lugar"]);
            $accidente->setTipo($row["tipo"]);
            $accidente->setLesion($row["lesion"]);
            $accidente->setParteCuerpoAfectada($row["parteCuerpoAfectada"]);
            $accidente->setDescripcion($row["descripcion"]);
            $accidente->setMecanismo($row["mecanismo"]);
            $accidente->setIncapacidad($row["incapacidad"]);
            $accidente->setDiasIncapacidad($row["diasIncapacidad"]);
            $accidente->setIdPersona($row["idPersona"]);

            $resultSet[$i]=$accidente;
            $i++;

        }

        return $resultSet;
    }

    public function getAllByPersona($idempleado)
    {
        $con =  $this->db();

        $res = $con->query("SELECT a.id idAccidente, a.gravedad, a.fecha, a.lugar, a.tipo, a.lesion, a.parteCuerpoAfectada, a.agente, a.descripcion, a.mecanismo,
                              a.incapacidad, a.diasIncapacidad
                            FROM accidentes a
                            WHERE a.idEmpleado = ".$idempleado."
                            ORDER BY a.id ASC");

        $i=0;
        while ($row = $res->fetch_assoc()) {


            //Instanciamos un accidente
            $accidente = new Accidente("accidentes");
            $accidente->setAgente($row["agente"]);
            $accidente->setId($row["idAccidente"]);
            $accidente->setGravedad($row["gravedad"]);
            $accidente->setFecha($row["fecha"]);
            $accidente->setLugar($row["lugar"]);
            $accidente->setTipo($row["tipo"]);
            $accidente->setLesion($row["lesion"]);
            $accidente->setParteCuerpoAfectada($row["parteCuerpoAfectada"]);
            $accidente->setDescripcion($row["descripcion"]);
            $accidente->setMecanismo($row["mecanismo"]);
            $accidente->setIncapacidad($row["incapacidad"]);
            $accidente->setDiasIncapacidad($row["diasIncapacidad"]);
            $accidente->setIdPersona($row["idPersona"]);

            $resultSet[$i]=$accidente;
            $i++;

        }

        return $resultSet;
    }

    //crear un nuevo accidente
    public function create()
    {
        $this->query = "INSERT INTO accidentes
                        (gravedad, fecha, lugar, tipo, lesion, parteCuerpoAfectada, agente, descripcion, mecanismo,
                              incapacidad, diasIncapacidad, idEmpleado)
                        VALUES 
                        ('" . $this->gravedad . "',
                         '" . $this->fecha . "',
                         '" . $this->lugar . "',
                         '" .$this->tipo. "',
                         '" .$this->lesion. "',
                         '" . $this->parteCuerpoAfectada . "',
                         '" . $this->agente . "',
                         '" . $this->descripcion . "',
                         '" . $this->mecanismo . "',
                         '" . $this->incapacidad . "',
                         '" . $this->diasIncapacidad . "',                         
                         '" . $this->idPersona . "')";
        //$con = new EntidadBase($this->table);
        $con =  $this->db();
        #$mysqli =  $con->db();
        $save = $con->query($this->query);
        if (!$save) {
            throw new Exception(mysqli_error($con)."[ $this->query]");
        }
        return $save;
    }

    public function getById($id)
    {
        $con =  $this->db();

        $res = $con->query("SELECT a.id idAccidente, a.gravedad, a.fecha, a.lugar, a.tipo, a.lesion, a.parteCuerpoAfectada, a.agente, a.descripcion, a.mecanismo,
                              a.incapacidad, a.diasIncapacidad, a.idEmpleado
                            FROM accidentes a
                            WHERE a.id = ".$id);

        while ($row = $res->fetch_assoc()) {


            //Instanciamos un accidente
            $accidente = new Accidente("accidentes");
            $accidente->setAgente($row["agente"]);
            $accidente->setId($row["idAccidente"]);
            $accidente->setGravedad($row["gravedad"]);
            $accidente->setFecha($row["fecha"]);
            $accidente->setLugar($row["lugar"]);
            $accidente->setTipo($row["tipo"]);
            $accidente->setLesion($row["lesion"]);
            $accidente->setParteCuerpoAfectada($row["parteCuerpoAfectada"]);
            $accidente->setDescripcion($row["descripcion"]);
            $accidente->setMecanismo($row["mecanismo"]);
            $accidente->setIncapacidad($row["incapacidad"]);
            $accidente->setDiasIncapacidad($row["diasIncapacidad"]);
            $accidente->setIdPersona($row["idEmpleado"]);



        }

        return $accidente;
    }

    public function countByMes($mes){

        $con = $this->db();
        $res = $con->query("SELECT COUNT(id) as total
                            FROM accidentes
                            WHERE month(fecha)=".$mes
        );

        $res=$res->fetch_array();

        return $res["total"];
    }

    public function diasIncapacidadByMes($mes){
        $con = $this->db();
        $res = $con->query("SELECT sum(diasIncapacidad) as total
                            FROM accidentes
                            WHERE month(fecha)=".$mes
        );
        $res=$res->fetch_array();

        return $res["total"];

    }


}