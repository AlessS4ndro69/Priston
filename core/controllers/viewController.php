<?php

require_once "./models/viewModel.php";

class vistasControlador extends vistasModelo{
    /**  --------------------Controlador obtener plantilla-------------------- */
    public function obtener_plantilla_controlador(){
        return require_once "./views/plantilla.php";
    }
    /**  --------------------Controlador obtener vistas-------------------- */
    public function obtener_vistas_controlador(){
        if(isset($_GET['views'])){
            echo " alert ('entro a los views')";
            $ruta = explode("/",$_GET['views']);
            $respuesta = vistasModelo::obtener_vistas_modelo($ruta[0]); 
           
        }else{
            //$respuesta = "login";
            $respuesta = "index";
        }
        return $respuesta;
    }
}
?>