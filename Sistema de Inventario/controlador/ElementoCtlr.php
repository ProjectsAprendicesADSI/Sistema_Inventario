<?php
require_once ('../modelo/DatosElementos.php');
if(!empty($_GET['action'])){
    ElementoCtlr::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}
class ElementoCtlr
{
    static function main($action)
    {
        if ($action == "crear") {
            ElementoCtlr::crear();
        } else if ($action == "editar") {
            ElementoCtlr::editar();
            /* }else if ($action == "buscarID"){
                 ElementoCtlr::buscarID();*/
        }
    }

    static public function crear()
    {
        try {
            $arrayDatosElementos = array();

            $arrayDatosElementos ['codigo'] = $_POST['codigo'];
            $arrayDatosElementos ['descripcion'] = $_POST['descripcion'];
            $arrayDatosElementos ['cantidad'] = $_POST['cantidad'];
            $arrayDatosElementos ['estado'] = $_POST['estado'];
            $arrayDatosElementos ['tipo'] = $_POST['tipo'];
            $arrayDatosElementos ['ubicacionBodega'] = $_POST['ubicacionBodega'];
            $Elemento = new DatosElementos($arrayDatosElementos);
            $Elemento->insertar();
            header("Location: ../vista/RElemento.html?respuesta=correcto");
        } catch (Exception $e) {
            var_dump($e);
           // header("Location: ../vista/administrador/registraTra/registraE.html?respuesta=error");

        }
    }
    static public function editar(){
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
            $persona = new DatosPersona($arrayDatosPersona);
            $persona->editar();
            header("Location: ../plantillas/administrador/web/index.html?respuesta=correcto");
        } catch (Exception $e) {
            header("Location: ../plantillas/administrador/web/index.html?respuesta=error");
        }
    }

}