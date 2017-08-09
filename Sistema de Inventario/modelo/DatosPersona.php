<?php

/**
 * Created by PhpStorm.
 * usuario: Equipo13
 * Date: 24/07/2017
 * Time: 1:09 PM
 */
require_once('conexion.php');

class DatosPersona extends conexion

{

private $idDatosPersona;
private $Documento;
private $nombres;
private $apellidos;
private $fechaNacimiento;
private $direccion;
private $email;
private $telefonoCelular;
private $Estado;
private $usuario;
private $contrasenia;
private $Perfil;

    public function __construct($DatosPersona_data = array())
    {
        parent::__construct(); //Llama al contructor padre "la clase conexion" para conectarme a la BD
        if(count($DatosPersona_data)>1){ //
            foreach ($DatosPersona_data as $campo => $valor){
                $this->$campo = $valor;
            }
        }else {

            $this->idDatosPersona = "" ;
            $this->Documento = "";
            $this->nombres = "";
            $this->apellidos = "";
            $this->fechaNacimiento = date("");
            $this->direccion = "";
            $this->email = "";
            $this->telefonoCelular = "";
            $this->Estado = "";
            $this->usuario = "";
            $this->contrasenia = "";
            $this->Perfil= "";
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
            $Persona->Documento = $getrow['Documento'];
            $Persona->nombres = $getrow['nombres'];
            $Persona->apellidos = $getrow['apellidos'];
            $Persona->fechaNacimiento = $getrow['fechaNacimiento'];
            $Persona->direccion = $getrow['direccion'];
            $Persona->email = $getrow['email'];
            $Persona->telefonoCelular = $getrow['telefonoCelular'];
            $Persona->Estado = $getrow['Estado'];
            $Persona->usuario = $getrow['usuario'];
            $Persona->contrasenia = $getrow['contrasenia'];
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
            $persona->Documento = $valor['$Documento'];
            $persona->nombres = $valor['nombres'];
            $persona->apellidos = $valor['apellidos'];
            $persona->fechaNacimiento = $valor['fechaNacimiento'];
            $persona->direccion = $valor['direccion'];
            $persona->email = $valor['email'];
            $persona->telefonoCelular = $valor['telefonoCelular'];
            $persona->Estado = $valor['Estado'];
            $persona->usuario = $valor['usuario'];
            $persona->contrasenia = $valor['contrasenia'];
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
        $this->insertRow("INSERT INTO datospersona VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )", array(

                $this->Documento,
                $this->nombres,
                $this->apellidos,
                $this->fechaNacimiento = date(""),
                $this->direccion,
                $this->email,
                $this->telefonoCelular,
                $this->Estado,
                $this->usuario,
                $this->contrasenia,
                $this->Perfil,
            )
            
        );
        $this->Disconnect();
        
    }

    public function editar()
    {
        $this->updateRow("UPDATE bdinventario.datospersona SET Documento=?, nombres = ?,  apellidos = ?, fechaNacimiento = ?,direccion= ?,email= ?,telefonoCelular= ?,Estado= ?,usuario= ?,contrasenia= ?,idEspecialidad = ?", array(

            $this->Documento,
            $this->nombres,
            $this->apellidos,
            $this->fechaNacimiento,
            $this->direccion,
            $this->email,
            $this->telefonoCelular,
            $this->Estado,
            $this->usuario,
            $this->contrasenia,
        ));
        $this->Disconnect();
    }

    public function eliminar($id)
    {
        // TODO: Implement eliminar() method.
    }
    public static function Login($usuario, $contrasenia){
        $arrayDatosPersona = array();
        $tmp = new DatosPersona();
        $getTempDatosPersona = $tmp->getRows("SELECT * FROM datospersona WHERE usuario = '$usuario'");
        if(count($getTempDatosPersona) >= 1){
            $getrows = $tmp->getRows("SELECT * FROM datospersona WHERE usuario = '$usuario' AND contrasenia = '$contrasenia'");
            if(count($getrows) >= 1){
                foreach ($getrows as $valor) {
                    return $valor;
                }
            }else{
                return "contraseña Incorrecto";
            }
        }else{
            return "No existe el usuario";
        }

        $tmp->Disconnect();
        return $arrayDatosPersona;
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
     * @return string
     */
    public function getDocumento()
    {
        return $this->Documento;
    }

    /**
     * @param string $Documento
     */
    public function setDocumento($Documento)
    {
        $this->Documento = $Documento;
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
    public function getcontrasenia()
    {
        return $this->contrasenia;
    }

    /**
     * @param mixed $contrasenia
     * @return DatosPersona
     */
    public function setcontrasenia($contrasenia)
    {
        $this->contrasenia = $contrasenia;
        return $this;
    }

    /**
     * @return string
     */
    public function getPerfil()
    {
        return $this->Perfil;
    }

    /**
     * @param string $Perfil
     */
    public function setPerfil($Perfil)
    {
        $this->Perfil = $Perfil;
    }




}