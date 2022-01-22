<?php
    // Si hubo $_POST, si se recibieron datos en el formulario:

     
  if(!empty($_POST['course']) || !empty($_GET['course'])){

    //Creamos la conexión:
    $conexion= new Datos_modelo();
    $conexion->Conectar();
    
    if(isset($_GET['course'])){$course = $_GET['course'];}
    if(isset($_POST['course'])){$course = $_POST['course'];}
    $date= date("Y-m-d");
    //echo $course;
    $sql="SELECT archivo_ruta FROM archivo WHERE (archivo_area='$course' and archivo_fecha='$date')";
    $resulset= $conexion->get_datos($sql);

    if($resulset){
        
        $filePath=$resulset[0]['archivo_ruta'];
        $fileName = basename($filePath);
        echo $filePath;

    }else {
        echo 0;   
    }

  
  }
  //No se recibieron datos en el formulario:
  else {
    echo 0;
  }

  $conexion=null;
  $sql=null;
  $resulset=null;

?>

