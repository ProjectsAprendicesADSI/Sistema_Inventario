
<?php
require_once ('../modelo/SalidaElementos.php');
if(!empty($_GET['action'])){
    SalidaElementoCtrl::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}
class  SalidaElementoCtrl
{
    static function main($action){
        if ($action == "crear"){
            SalidaElementoCtrl::crear();
        }else if ($action == "editar"){
            SalidaElementoCtrl::editar();
            /* }else if ($action == "buscarID"){
                 PersonaCtlr::buscarID();*/
        }
    }

    /**
     *
     */

    static public function crear (){
        try {
            $arraySalidaElementoCtrl = array();
            $arraySalidaElementoCtrl ['codigo'] = $_POST['codigo'];
            $arraySalidaElementoCtrl ['fechaHora'] = $_POST['fechaHora'];
            $arraySalidaElementoCtrl ['documentoTrabajador'] = $_POST['documentoTrabajador'];
            $arraySalidaElementoCtrl ['nombreTrabajador'] = $_POST['nombreTrabajador'];
            $arraySalidaElementoCtrl ['Observaciones'] = $_POST['Observaciones'];
            $Persona = new SalidaElementos($arraySalidaElementoCtrl);
            $Persona->insertar();
            header("Location: ../vista/RSalidaElemento.html?respuesta=correcto");
        } catch (Exception $e) {
            var_dump($e);
            //header("Location: ../vista/administrador/registraTra/index.html?respuesta=error");
        }
    }
}
