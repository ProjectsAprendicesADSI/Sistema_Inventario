<?php

/**
 * Created by PhpStorm.
 * User: Equipo13
 * Date: 24/07/2017
 * Time: 1:45 PM
 */
require_once('conexion.php');

class Historial extends conexion

{
private $idHistoral;
private $elementoPrestados;
private $codigo;
private $trabajador;
private $fechaHoraPresta;
private $fechaHoraEntrega;
private $observaciones;

    /**
     * @return mixed
     */
    public function getIdHistoral()
    {
        return $this->idHistoral;
    }

    /**
     * @param mixed $idHistoral
     * @return Historial
     */
    public function setIdHistoral($idHistoral)
    {
        $this->idHistoral = $idHistoral;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getElementoPrestados()
    {
        return $this->elementoPrestados;
    }

    /**
     * @param mixed $elementoPrestados
     * @return Historial
     */
    public function setElementoPrestados($elementoPrestados)
    {
        $this->elementoPrestados = $elementoPrestados;
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
     * @return Historial
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTrabajador()
    {
        return $this->trabajador;
    }

    /**
     * @param mixed $trabajador
     * @return Historial
     */
    public function setTrabajador($trabajador)
    {
        $this->trabajador = $trabajador;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaHoraPresta()
    {
        return $this->fechaHoraPresta;
    }

    /**
     * @param mixed $fechaHoraPresta
     * @return Historial
     */
    public function setFechaHoraPresta($fechaHoraPresta)
    {
        $this->fechaHoraPresta = $fechaHoraPresta;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaHoraEntrega()
    {
        return $this->fechaHoraEntrega;
    }

    /**
     * @param mixed $fechaHoraEntrega
     * @return Historial
     */
    public function setFechaHoraEntrega($fechaHoraEntrega)
    {
        $this->fechaHoraEntrega = $fechaHoraEntrega;
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
     * @return Historial
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;
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