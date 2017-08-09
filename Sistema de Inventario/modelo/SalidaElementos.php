<?php

/**
 * Created by PhpStorm.
 * User: Equipo13
 * Date: 24/07/2017
 * Time: 1:48 PM
 */
require_once('conexion.php');

class SalidaElementos extends conexion

{
    private $idSalidaElemento;
    private $codigo;
    private $fechaHora;
    private $documentoTrabajador;
    private $nombreTrabajador;
    private $Observaciones;

    public function __construct($SalidaElementos = array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        if(count($SalidaElementos)>1){ //
            foreach ($SalidaElementos as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {

            $this->idSalidaElemento = "";
            $this->codigo = "";
            $this->fechaHora = date("Y-m-d H:i:s");
            $this->documentoTrabajador = "";
            $this->nombreTrabajador = "";
            $this->Observaciones = "";
        }
    }

    function __destruct() {
        $this->Disconnect();
        unset($this);
    }
     public static function buscarForId($id)
    {
        // TODO: Implement buscarForId() method.
    }

     public static function buscar($query)
    {
        // TODO: Implement buscar() method.
    }

     public static function getAll()
    {
        // TODO: Implement getAll() method.
    }

     public function insertar()
    {
    
        $this->insertRow("INSERT INTO bdinventario.salidaelemento VALUES (NULL, ?, ?, ?, ?, ?)", array(

                $this->codigo,
                $this->fechaHora = date("Y-m-d H:i:s"),
                $this->documentoTrabajador,
                $this->nombreTrabajador,
                $this->Observaciones,
            )

        );
        $this->Disconnect();

    }
    

     public function editar()
    {
        // TODO: Implement editar() method.
    }

     public function eliminar($id)
    {
        // TODO: Implement eliminar() method.
    }

    /**
     * @return mixed
     */
    public function getIdSalidaElemento()
    {
        return $this->idSalidaElemento;
    }

    /**
     * @param mixed $idSalidaElemento
     * @return SalidaElementos
     */
    public function setIdSalidaElemento($idSalidaElemento)
    {
        $this->idSalidaElemento = $idSalidaElemento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * @param mixed $codigo
     * @return SalidaElementos
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaHora()
    {
        return $this->fechaHora;
    }

    /**
     * @param mixed $fechaHora
     * @return SalidaElementos
     */
    public function setFechaHora($fechaHora)
    {
        $this->fechaHora = $fechaHora;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDocumentoTrabajador()
    {
        return $this->documentoTrabajador;
    }

    /**
     * @param mixed $documentoTrabajador
     * @return SalidaElementos
     */
    public function setDocumentoTrabajador($documentoTrabajador)
    {
        $this->documentoTrabajador = $documentoTrabajador;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNombreTrabajador()
    {
        return $this->nombreTrabajador;
    }

    /**
     * @param mixed $nombreTrabajador
     * @return SalidaElementos
     */
    public function setNombreTrabajador($nombreTrabajador)
    {
        $this->nombreTrabajador = $nombreTrabajador;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getObservaciones()
    {
        return $this->Observaciones;
    }

    /**
     * @param mixed $Observaciones
     * @return SalidaElementos
     */
    public function setObservaciones($Observaciones)
    {
        $this->Observaciones = $Observaciones;
        return $this;
    }

}

