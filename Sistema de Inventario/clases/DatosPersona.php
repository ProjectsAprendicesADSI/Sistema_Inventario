<?php

/**
 * Created by PhpStorm.
 * User: Equipo13
 * Date: 24/07/2017
 * Time: 1:09 PM
 */
require_once('conexion.php');

class DatosPersona extends conexion

{

private $idDatosPersona;
private $nombres;
private $apellidos;
private $fechaNacimiento;
private $direccion;
private $email;
private $telefonoCelular;
private $Estado;
private $usuario;
private $contraseña;

    public function __construct($persona_data = array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        if(count($persona_data)>1){ //
            foreach ($persona_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {

            $this->idDatosPersona = "" ;
            $this->nombres = "";
            $this->apellidos = "";
            $this->fechaNacimiento = "";
            $this->direccion = "";
            $this->email = "";
            $this->telefonoCelular = "";
            $this->Estado = "";
            $this->usuario = "";
            $this->contraseña = "";
        }
    }

    function __destruct() {
        $this->Disconnect();
        unset($this);
    }


    public static function buscarForId($id)
    {
        $Persona = new DatosPersona();
        if ($id > 0){
            $getrow = $Persona->getRow("SELECT * FROM DatosPersona WHERE idDatosPersona =?", array($id));
            $Persona->idDatosPersona = $getrow['idDatosPersona'];
            $Persona->nombres = $getrow['nombres'];
            $Persona->apellidos = $getrow['apellidos'];
            $Persona->fechaNacimiento = $getrow['fechaNacimiento'];
            $Persona->direccion = $getrow['direccion'];
            $Persona->email = $getrow['email'];
            $Persona->telefonoCelular = $getrow['telefonoCelular'];
            $Persona->Estado = $getrow['Estado'];
            $Persona->usuario = $getrow['usuario'];
            $Persona->contraseña = $getrow['contraseña'];
            $Persona->Disconnect();
            return $Persona;
        }else{
            return NULL;
        }
    }

    public static function buscar($query)
    {
        $arrDatosPersona = array();
        $tmp = new DatosPersona();
        $getrows = $tmp->getRows($query);
        foreach ($getrows as $valor) {
            $persona = new DatosPersona();
            $persona->idDatosPersona = $valor['idDatosPersona'];
            $persona->nombres = $valor['nombres'];
            $persona->apellidos = $valor['apellidos'];
            $persona->fechaNacimiento = $valor['fechaNacimiento'];
            $persona->direccion = $valor['direccion'];
            $persona->email = $valor['email'];
            $persona->telefonoCelular = $valor['telefonoCelular'];
            $persona->Estado = $valor['Estado'];
            $persona->usuario = $valor['usuario'];
            $persona->contraseña = $valor['contraseña'];
            array_push($arrDatosPersona, $persona);
        }
        $tmp->Disconnect();
        return $arrDatosPersona;
    }

    public static function getAll()
    {
        // TODO: Implement getAll() method.
    }

    public function insertar()
    {
        $this->insertRow("INSERT INTO bdinventario/datospersona VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?)", array(
                $this->idDatosPersona,
                $this->nombres,
                $this->apellidos,
                $this->fechaNacimiento,
                $this->direccion,
                $this->email,
                $this->telefonoCelular,
                $this->Estado,
                $this->usuario,
                $this->contraseña,
            )
        );
        $this->Disconnect();
    }

    public function editar()
    {
        $this->updateRow("UPDATE bdinventario/datospersona SET Nombre = ?, Estado = ?,idDatosPersona = ?, nombres = ?,  apellidos = ?, fechaNacimiento = ?,direccion= ?,email= ?,telefonoCelular= ?,Estado= ?,usuario= ?,contraseña= ?,idEspecialidad = ?", array(
            $this->idDatosPersona,
            $this->nombres,
            $this->apellidos,
            $this->fechaNacimiento,
            $this->direccion,
            $this->email,
            $this->telefonoCelular,
            $this->Estado,
            $this->usuario,
            $this->contraseña,
        ));
        $this->Disconnect();
    }

    public function eliminar($id)
    {
        // TODO: Implement eliminar() method.
    }

    /**
     * @return mixed
     */
    public function getIdDatosPersona()
    {
        return $this->idDatosPersona;
    }

    /**
     * @param mixed $idDatosPersona
     * @return DatosPersona
     */
    public function setIdDatosPersona($idDatosPersona)
    {
        $this->idDatosPersona = $idDatosPersona;
        return $this;
    }

    /**
     * @return mixed
     */

    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * @param mixed $nombres
     * @return DatosPersona
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApellidos()
    {
        return $this->apellidos;
    }

    /**
     * @param mixed $apellidos
     * @return DatosPersona
     */
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }

    /**
     * @param mixed $fechaNacimiento
     * @return DatosPersona
     */
    public function setFechaNacimiento($fechaNacimiento)
    {
        $this->fechaNacimiento = $fechaNacimiento;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     * @return DatosPersona
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return DatosPersona
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTelefonoCelular()
    {
        return $this->telefonoCelular;
    }

    /**
     * @param mixed $telefonoCelular
     * @return DatosPersona
     */
    public function setTelefonoCelular($telefonoCelular)
    {
        $this->telefonoCelular = $telefonoCelular;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEstado()
    {
        return $this->Estado;
    }

    /**
     * @param mixed $Estado
     * @return DatosPersona
     */
    public function setEstado($Estado)
    {
        $this->Estado = $Estado;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * @param mixed $usuario
     * @return DatosPersona
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContraseña()
    {
        return $this->contraseña;
    }

    /**
     * @param mixed $contraseña
     * @return DatosPersona
     */
    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;
        return $this;
    }




}