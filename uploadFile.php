<?php
include('core/core.php');
if(!empty($_POST['tema']) and !empty($_POST['area']) and !empty($_POST['fecha']) ){

    //Creamos la conexión:
    $conexion= new Datos_modelo();
    $conexion->Conectar();
    
    $tema = $_POST['tema'];
    $area = $_POST['area'];
    $date = $_POST['fecha'];
    
    if($_FILES['archivo']){
        
            $name_base = basename($_FILES['archivo']['name']);
            $name_final = date('m-d-y').'-'.date('H-i-s').$name_base;
            $path = 'files/' . $name_final;
            $upload_file = move_uploaded_file($_FILES['archivo']['tmp_name'],$path);
            if($upload_file){
                $sql = "INSERT INTO archivo (archivo_area,archivo_tema,archivo_ruta,archivo_fecha) VALUES ('$area','$tema','$path',$date)";
                $resulset= $conexion->insertar($sql);
                if($resulset){
                    echo "Exito";
                    header('Location:index.php');
                }
                else{
                    printf("Errormesagge");
                }
            }
            echo "Exito";
        
        
        
    }else{
        echo "Error al subir archivo";
    }
    //header('Location:index.php');

}
?>

