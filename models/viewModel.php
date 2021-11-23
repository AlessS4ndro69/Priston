<?php
class vistasModelo{
    /**  --------------------Modelo obtener vistas-------------------- */
 
    protected static function obtener_vistas_modelo($vistas){
        $listaBlanca=["client-list","client-new","client-search","client-update","company","home","item-list","item-new","item-search","item-update","reservation-list","reservation-new","reservation-pending","reservation-search","reservation-update","user-list","reservation-reservation","user-new","user-search","user-update"];
        if(in_array($vistas, $listaBlanca)){
            echo "evaluandooo en array";
            $file = "./views/contenidos/" . $vistas . "-view.php";
            if(is_file($file)){
                 $contenido  = $file;
            }else{ $contenido = "404";} 

        }elseif($vistas == "login" || $vistas == "index"){
            $contenido = "login";
        }else{
            $contenido = "404";
        }
        //return $contenido ;
        return "index" ;
    }   


}

?>