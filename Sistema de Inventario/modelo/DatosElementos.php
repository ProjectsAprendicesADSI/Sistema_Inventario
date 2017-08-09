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

    public function __construct($DatosElementos_data = array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        if(count($DatosElementos_data)>1){ //
            foreach ($DatosElementos_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {
                $this->idElemento = "";
                $this->codigo = "" ;
                $this->descripcion = "" ;
                $this->cantidad= "" ;
                $this->estado= "" ;
                $this->tipo= "" ;
                $this->ubicacionBodega= "" ;

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
        $this->insertRow("INSERT INTO bdinventario.datoselemento VALUES (NULL, ?, ?, ?, ?, ?, ?)", array(


                $this->codigo,
                $this->descripcion,
                $this->cantidad,
                $this->estado,
                $this->tipo,
                $this->ubicacionBodega,

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



}