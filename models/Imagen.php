<?php
/**
 * Created by PhpStorm.
 * User: hmarm
 * Date: 16/02/2017
 * Time: 5:13 AM
 */

require_once ("models/Accidente.php");
class Imagen extends EntidadBase
{
    private $id;
    private $idAccidente;
    private $nombre;


    //Creamos el constructor
    public function __construct() {
        $table="imagenes";
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
    public function getIdAccidente()
    {
        return $this->idAccidente;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $idAccidente
     */
    public function setIdAccidente($idAccidente)
    {
        $this->idAccidente = $idAccidente;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function save()
    {
        $this->query = "INSERT INTO imagenes
                        ( idAccidente, nombre)
                        VALUES 
                        ('" . $this->idAccidente . "',
                         '" . $this->nombre . "')";
        //$con = new EntidadBase($this->table);
        $con = $this->db();
        #$mysqli =  $con->db();
        $save = $con->query($this->query);
        if (!$save) {
            throw new Exception(mysqli_error($con) . "[ $this->query]");
        }
        return $save;
    }

    public function getByAccidente($idAccidente)
    {
        $con = $this->db();
        $res = $con->query("SELECT id, nombre 
                            FROM personas
                            WHERE idAccidente) = ".$idAccidente);
        $res=$res->fetch_array();
        return $res;
    }


}