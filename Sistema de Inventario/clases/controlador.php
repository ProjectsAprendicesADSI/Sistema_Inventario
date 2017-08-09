<?php
require_once (__DIR__.'/../clases/DatosPersona.php');
if(!empty($_GET['action'])){
    DatosPersonaController::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}
class DatosPersonaController{
    static function main($action){
        if ($action == "crear"){
            DatosPersonaController::crear();
        }else if ($action == "editar"){
            DatosPersonaController::editar();
       /* }else if ($action == "buscarID"){
            DatosPersonaController::buscarID();*/
        }
    }

    /**
     *
     */
    static public function crear (){
        try {
            $arrayDatosPersona = array();
            $arrayDatosPersona ['idDatosPersona'] = $_POST['idDatosPersona'];
            $arrayDatosPersona->nombres = $_POST['nombres'];
            $arrayDatosPersona->apellidos = $_POST['apellidos'];
            $arrayDatosPersona->fechaNacimiento = $_POST['fechaNacimiento'];
            $arrayDatosPersona->direccion = $_POST['direccion'];
            $arrayDatosPersona->email = $_POST['email'];
            $arrayDatosPersona->telefonoCelular = $_POST['telefonoCelular'];
            $arrayDatosPersona->Estado = $_POST['Estado'];
            $arrayDatosPersona->usuario = $_POST['usuario'];
            $arrayDatosPersona->contraseña = $_POST['contraseña'];
            $Persona = new DatosPersona($arrayDatosPersona);
            $Persona->insertar();
            header("Location: ../plantillas/administrador/index.html?respuesta=correcto");
        } catch (Exception $e) {
            header("Location: ../plantillas/administrador/index.html?respuesta=error");
        }
    }
    /*
    static public function selectEspecialista ($isRequired=true, $id="idEspecialista", $nombre="idEspecialista", $class=""){
        $arrEspecialistas = Especialista::getAll(); /*  */
    /*$htmlSelect = "<select ".(($isRequired) ? "required" : "")." id= '".$id."' name='".$nombre."' class='".$class."'>";
    $htmlSelect .= "<option >Seleccione</option>";
    if(count($arrEspecialistas) > 0){
        foreach ($arrEspecialistas as $personaista)
            $htmlSelect .= "<option value='".$personaista->getIdEspecialista()."'>".$personaista->getNombre()." ".$personaista->getApellido()."</option>";
    }
    $htmlSelect .= "</select>";
    return $htmlSelect;
}*/
    static public function editar (){
        try {
            $arrayDatosPersona = array();
            $arrayDatosPersona ['idDatosPersona'] = $_POST['idDatosPersona'];
            $arrayDatosPersona->nombres = $_POST['nombres'];
            $arrayDatosPersona->apellidos = $_POST['apellidos'];
            $arrayDatosPersona->fechaNacimiento = $_POST['fechaNacimiento'];
            $arrayDatosPersona->direccion = $_POST['direccion'];
            $arrayDatosPersona->email = $_POST['email'];
            $arrayDatosPersona->telefonoCelular = $_POST['telefonoCelular'];
            $arrayDatosPersona->Estado = $_POST['Estado'];
            $arrayDatosPersona->usuario = $_POST['usuario'];
            $arrayDatosPersona->contraseña = $_POST['contraseña'];
            $persona = new DatosPersona($arrayDatosPersona);
            $persona->editar();
            header("Location: ../plantillas/administrador/index.html?respuesta=correcto");
        } catch (Exception $e) {
            header("Location: ../plantillas/administrador/index.html?respuesta=error");
        }
    }


    static public function buscarID ($id){
        try {
            return DatosPersona::buscarForId($id);
        } catch (Exception $e) {
            header("Location: ../gestionarDatosPersonaes.php?respuesta=error");
        }
    }
    public function buscarAll (){
        try {
            return DatosPersona::getAll();
        } catch (Exception $e) {
            header("Location: ../gestionarDatosPersonaes.php?respuesta=error");
        }
    }
    public function buscar ($Query){
        try {
            return DatosPersona::buscar($Query);
        } catch (Exception $e) {
            header("Location: ../gestionarDatosPersonaes.php?respuesta=error");
        }
    }
}

?>