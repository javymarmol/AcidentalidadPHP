<?php

Class DataBase{

    private $host, $user, $pass, $database, $charset, $driver;

    //Propiedades

    protected $query;
    protected $rows = array();
    private $conn;
    public $mensaje = "Hecho";


    function __construct()
    {
        $db_cfg = require_once ('db/config.php');
        $this->driver=$db_cfg['driver'];
        $this->host=$db_cfg['host'];
        $this->user=$db_cfg['user'];
        $this->pass=$db_cfg['pass'];
        $this->database=$db_cfg['database'];
        $this->charset=$db_cfg['charset'];
        //var_dump($db_cfg);
    }

    //Conectar a la base de datos
    public function open_connection()
    {
        if($this->driver=="mysql" || $this->driver==null){

            #var_dump($this->host);
            #var_dump($this->user);
            #var_dump($this->pass);
            #var_dump($this->database);
            #$con=new mysqli($this->host, $this->user, $this->pass, $this->database) or die(mysqli_connect_error());
            $con=new mysqli("localhost", "hmarmol", "korazon03", "pruebas") or die(mysqli_connect_error());

            if ($con->connect_errno) {
                die('Connect Error: ' . $con->connect_errno);
            }

            $con->query("SET NAMES '".$this->charset."'");
        }

        return $con;
    }

    //Desconectar la base de datos
    private function close_connection()
    {
        $this->conn->close();
    }


    //Ejecutar una query simple (INSERT, DELETE, UPDATE)
    protected function execute_single_query()
    {
        if($_POST){
            $this->open_connection();
            $this->conn->query($this->query);
            $this->close_connection();
        }else{
            $this->mensaje = "Metodo no permitido";
        }
    }

    //Traer resultados de una consulta en un array
    protected function get_result_from_query()
    {
        $this->open_connection();
        $result = $this->conn->query($this->query);
        while ($this->rows[] = $result->fetch_assoc());
        $result->close();
        $this->close_connection();
        array_pop($this->rows);
    }
}