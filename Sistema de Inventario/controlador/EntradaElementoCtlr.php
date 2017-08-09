
<?php
require_once ('../modelo/EntradaElemento.php');
if(!empty($_GET['action'])){
EntradaElementoCtlr::main($_GET['action']);
}else{
    echo "No se encontro ninguna accion...";
}
class  EntradaElementoCtlr
{
    static function main($action){
        if ($action == "crear"){
            EntradaElementoCtlr::crear();
        }else if ($action == "editar"){
            EntradaElementoCtlr::editar();
            /* }else if ($action == "buscarID"){
                 PersonaCtlr::buscarID();*/
        }
    }

    /**
     *
     */

    static public function crear (){
        try {
            $arrayEntradaElementoCtlr = array();
            $arrayEntradaElementoCtlr ['codigo'] = $_POST['codigo'];
            $arrayEntradaElementoCtlr ['fechaHora'] = $_POST['fechaHora'];
            $arrayEntradaElementoCtlr ['documentoTrabajador'] = $_POST['documentoTrabajador'];
            $arrayEntradaElementoCtlr ['nombreTrabajador'] = $_POST['nombreTrabajador'];
            $arrayEntradaElementoCtlr ['estado'] = $_POST['estado'];
            $arrayEntradaElementoCtlr ['Observaciones'] = $_POST['Observaciones'];
            $elemento  = new EntradaElemento ($arrayEntradaElementoCtlr);
            $elemento ->insertar();
            { header("Location: ../vista/REntradaElemento.html?respuesta=correcto");}
        } catch (Exception $e) {
            var_dump($e);
            //header("Location: ../vista/administrador/registraTra/index.html?respuesta=error");
        }
    }

}