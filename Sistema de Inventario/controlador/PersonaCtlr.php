<?php
require_once ('../modelo/DatosPersona.php');
if(!empty($_GET['action'])){
    PersonaCtlr::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}
class PersonaCtlr{
    static function main($action)
    {
        if ($action == "crear") {
            PersonaCtlr::crear();
        } else if ($action == "editar") {
            PersonaCtlr::editar();
        } else if ($action == "Login") {
            PersonaCtlr::Login();
        } else if ($action == "CerrarSession") {
            PersonaCtlr::CerrarSession();
        } else if ($action == "buscarID") {
            PersonaCtlr::buscarID();

        }
    }

    /**
     *
     */
    static public function crear (){
        try {
            $arrayDatosPersona = array();

            $arrayDatosPersona ['Documento'] = $_POST['Documento'];
            $arrayDatosPersona ['nombres'] = $_POST['nombres'];
            $arrayDatosPersona ['apellidos'] = $_POST['apellidos'];
            $arrayDatosPersona ['fechaNacimiento'] = $_POST['fechaNacimiento'];
            $arrayDatosPersona ['direccion'] = $_POST['direccion'];
            $arrayDatosPersona ['email'] = $_POST['email'];
            $arrayDatosPersona ['telefonoCelular'] = $_POST['telefonoCelular'];
            $arrayDatosPersona ['Estado'] = $_POST['Estado'];
            $arrayDatosPersona ['usuario'] = $_POST['usuario'];
            $arrayDatosPersona ['contrasenia'] = $_POST['contrasenia'];
            $arrayDatosPersona ['Perfil'] = $_POST['Perfil'];
            $Persona = new DatosPersona($arrayDatosPersona);
            $Persona->insertar();
            header("Location: ../vista/Rtrabajador.html?respuesta=correcto");
        } catch (Exception $e) {
            var_dump($e);
            //header("Location: ../vista/administrador/registraTra/index.html?respuesta=error");
        }
    }
   
    static public function editar (){
    try {
        $arrayDatosPersona = array();
        $arrayDatosPersona ['idDatosPersona'] = $_POST['idDatosPersona'];
        $arrayDatosPersona ['Documento'] = $_POST['Documento'];
        $arrayDatosPersona ['nombres'] = $_POST['nombres'];
        $arrayDatosPersona ['apellidos'] = $_POST['apellidos'];
        $arrayDatosPersona ['fechaNacimiento'] = $_POST['fechaNacimiento'];
        $arrayDatosPersona ['direccion'] = $_POST['direccion'];
        $arrayDatosPersona ['email'] = $_POST['email'];
        $arrayDatosPersona ['telefonoCelular'] = $_POST['telefonoCelular'];
        $arrayDatosPersona ['Estado'] = $_POST['Estado'];
        $arrayDatosPersona ['usuario'] = $_POST['usuario'];
        $arrayDatosPersona ['contrasenia'] = $_POST['contrasenia'];
        $arrayDatosPersona ['Perfil'] = $_POST['Perfil'];
        $persona = new DatosPersona($arrayDatosPersona);
        $persona->editar();
        header("Location: ../plantillas/administrador/web/index.html?respuesta=correcto");
    } catch (Exception $e) {
        header("Location: ../plantillas/administrador/web/index.html?respuesta=error");
    }
}


  /*  static public function buscarID ($id){
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
    }*/
    public function buscar ($Query){
        try {
            return DatosPersona::buscar($Query);
        } catch (Exception $e) {
            header("Location: ../gestionarDatosPersonaes.php?respuesta=error");
        }
    }
    public function Login (){
        try {
            $usuario = $_POST['usuario'];
            $contrasenia = $_POST['contrasenia'];
            if(!empty($usuario) && !empty($contrasenia)) {
                $respuesta = DatosPersona::Login($usuario, $contrasenia);
                if (is_array($respuesta)) {
                    $_SESSION['idDatosPersona'] = $respuesta['idDatosPersona'];
                    $_SESSION['Perfil'] = $respuesta['Perfil'];
                    try {
                        echo TRUE;
                        header("Location: ../vista/pag3.php");
                    } catch (Exception $e) {

                    }
                    }
                else if ($respuesta == "contrasenia Incorrecto") {
                        echo "<div class='ui-state-error ui-corner-all' style='margin-top: 20px; padding: 0 .7em;'>";
                        echo "<p><span class='ui-icon ui-icon-alert' style='float: left; margin-right: .3em;'></span>";
                        echo "<strong>Error!</strong> La Contraseña No Coincide Con El Usuario</p>";
                        echo "</div>";
                    } else if ($respuesta == "No existe el usuario") {
                        echo "<div class='ui-state-error ui-corner-all' style='margin-top: 20px; padding: 0 .7em;'>";
                        echo "<p><span class='ui-icon ui-icon-alert' style='float: left; margin-right: .3em;'></span>";
                        echo "<strong>Error!</strong> No Existe Un Usuario Con Estos Datos</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<div class='ui-state-error ui-corner-all' style='margin-top: 20px; padding: 0 .7em;'>";
                    echo "<p><span class='ui-icon ui-icon-alert' style='float: left; margin-right: .3em;'></span>";
                    echo "<strong>Error!</strong> Datos Vacios</p>";
                    echo "</div>";
                }

        } catch (Exception $e) {
            header("Location: ../login.php?respuesta=error");
        }
    }

    public function CerrarSession (){
        session_destroy();
        header("Location: ../Vista/index.php");
    }
    static public function ActivarDatosPersona (){
        try {
            $ObjDatosPersona = DatosPersona::buscarForId($_GET['IdDatosPersona']);
            $ObjDatosPersona->setEstado("Activo");
            $ObjDatosPersona->editar();
            header("Location: ../vista/listtaTrabajador.html");
        } catch (Exception $e) {
            header("Location: ../vista/listtaTrabajador.html");
        }
    }
    static public function InactivarDatosPersona (){
        try {
            $ObjDatosPersona = DatosPersona::buscarForId($_GET['IdDatosPersona']);
            $ObjDatosPersona->setEstado("Inactivo");
            $ObjDatosPersona->editar();
            header("Location: ../vista/listtaTrabajador.html");
        } catch (Exception $e) {
            header("Location: ../vista/listtaTrabajador.html");
        }
    }
}

?>