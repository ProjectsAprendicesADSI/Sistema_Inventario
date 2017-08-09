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



    protected static function buscarForId($id)
    {
        // TODO: Implement buscarForId() method.
    }

    protected static function buscar($query)
    {
        // TODO: Implement buscar() method.
    }

    protected static function getAll()
    {
        // TODO: Implement getAll() method.
    }

    protected function insertar()
    {
        // TODO: Implement insertar() method.
    }

    protected function editar()
    {
        // TODO: Implement editar() method.
    }

    protected function eliminar($id)
    {
        // TODO: Implement eliminar() method.
    }
}