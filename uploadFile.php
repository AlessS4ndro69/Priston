<?php
include('core/core.php');
if(!empty($_POST['tema']) and !empty($_POST['area']) and !empty($_POST['fecha']) ){

    //Creamos la conexión:
    $conexion= new Datos_modelo();
    $conexion->Conectar();
    
    $tema = $_POST['tema'];
    $area = $_POST['area'];
    $date = $_POST['fecha'];
    //$date = date("Y-m-d",strtotime($date));
    $date = date("Y-m-d",strtotime($date));
    echo $date;
    if($_FILES['archivo']){
        
            //$directorio = "files/" . $area . "/" . $tema . "/" . $date;
            $directorio = "files/" ;
            
            if (!file_exists($directorio)) {
                mkdir($directorio, 0700);
            }
            if (!file_exists($directorio . $area)) {
                mkdir($directorio . $area, 0700);
            }
            if (!file_exists($directorio . $area . "/" . $tema)) {
                mkdir($directorio . $area . "/" . $tema, 0700);
            }
            if (!file_exists($directorio . $area . "/" . $tema . "/" . $date)) {
                mkdir($directorio . $area . "/" . $tema . "/" . $date, 0700);
            }
            $directorio = $directorio . $area . "/" . $tema . "/" . $date;
            //$name_base = basename($_FILES['archivo']['name']);
            //$name_final = date('m-d-y').'-'.date('H-i-s').$name_base;
            //$path = 'files/' . $name_final;
            $name = basename($_FILES['archivo']['name']);
            $directorio = $directorio . '/' .$name;
            $upload_file = move_uploaded_file($_FILES['archivo']['tmp_name'], $directorio);
            if($upload_file){
                $sql = "INSERT INTO archivo (archivo_area,archivo_tema,archivo_ruta,archivo_fecha) VALUES ('$area','$tema','$directorio','$date')";
                $resulset= $conexion->insertar($sql);
                if($resulset){
                    //echo "Exito";
                    header('location:index.php');
                }
                else{
                    printf("Errormesagge");
                }
            }
            //echo "Exito";
        
        
        
    }else{
        echo "Error al subir archivo";
    }
    //header('Location:index.php');

}else{
    //header('location:error.php');
    //header('location:index.php');
    echo "Error al subir archivo";
}

?>

