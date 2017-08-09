<?php

/**
 * Created by PhpStorm.
 * User: Equipo13
 * Date: 24/07/2017
 * Time: 1:51 PM
 */
require_once('conexion.php');

class EntradaElemento extends conexion

{

    private $codigo;
    private $fechaHora;
    private $documentoTrabajador;
    private $nombreTrabajador;
    private $estado;
    private $observaciones;


    public function __construct($EntradaElemento = array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        if(count($EntradaElemento)>1){ //
            foreach ($EntradaElemento as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {

            $this->idEntradaElemento = "";
            $this->codigo = "";
            $this->fechaHora = date("Y-m-d H:i:s");
            $this->documentoTrabajador = "";
            $this->nombreTrabajador = "";
            $this->estado = "";
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
        $this->insertRow("INSERT INTO entradaelemento VALUES (NULL, ?, ?, ?, ?, ?, ?)", array(

                $this->codigo,
                $this->fechaHora = date("Y-m-d H:i:s"),
                $this->documentoTrabajador,
                $this->nombreTrabajador,
                $this->estado,
                $this->observaciones,
            )

        );
        $this->Disconnect();
    }

    protected function editar()
    {
        // TODO: Implement editar() method.
    }

    protected function eliminar($id)
    {
        // TODO: Implement eliminar() method.
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
     * @return EntradaElemento
     */
    public function setFechaHora($fechaHora)
    {
        $this->fechaHora = $fechaHora;
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
     * @return EntradaElemento
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
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
     * @return EntradaElemento
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
     * @return EntradaElemento
     */
    public function setNombreTrabajador($nombreTrabajador)
    {
        $this->nombreTrabajador = $nombreTrabajador;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param mixed $estado
     * @return EntradaElemento
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * @param mixed $observaciones
     * @return EntradaElemento
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
        return $this;
    }




}