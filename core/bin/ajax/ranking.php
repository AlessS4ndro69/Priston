<?php
    //Creamos la conexión:
    $conexion= new Datos_modelo();
    $conexion->Conectar();

    $sql="SELECT * FROM votacion_seminario";
    $tablaVotos = $conexion->get_datos($sql);
    $_SESSION['ranking']=$tablaVotos;
    $resulset = $conexion->get_datos($sql);

    if($resulset!=0){
        echo json_encode($resulset);
    }else{
      echo 0;
    }
  $conexion=null;
  $sql=null;
  $resulset=null;

?>

