<?php

/**
 * Created by PhpStorm.
 * User: Equipo13
 * Date: 24/07/2017
 * Time: 1:17 PM
 */

require_once('conexion.php');

class DatosElementos extends conexion

{
    private $idElemento;
    private $codigo;
    private $descripcion;
    private $cantidad;
    private $estado;
    private $tipo;
    private $ubicacionBodega;

    /**
     * @return mixed
     */
    public function getIdElemento()
    {
        return $this->idElemento;
    }

    /**
     * @param mixed $idElemento
     * @return DatosElementos
     */
    public function setIdElemento($idElemento)
    {
        $this->idElemento = $idElemento;
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
     * @return DatosElementos
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * @param mixed $descripcion
     * @return DatosElementos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * @param mixed $cantidad
     * @return DatosElementos
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;
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
     * @return DatosElementos
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo
     * @return DatosElementos
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUbicacionBodega()
    {
        return $this->ubicacionBodega;
    }

    /**
     * @param mixed $ubicacionBodega
     * @return DatosElementos
     */
    public function setUbicacionBodega($ubicacionBodega)
    {
        $this->ubicacionBodega = $ubicacionBodega;
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