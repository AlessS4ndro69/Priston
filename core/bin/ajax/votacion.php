<?php
    //Creamos la conexión:
    $conexion= new Datos_modelo();
    $conexion->Conectar();


    //$sql="SELECT * FROM estudiante WHERE (estudiante_dni='$dni' and estudiante_pass='$pass' ) LIMIT 1";
    
    $course = $_POST['course'];
    $id = $_POST['id'] ;
    $points = $_SESSION['ranking'][$id]['puntaje'] + $_POST['points'] ;
    $votantes = $_SESSION['ranking'][$id]['votantes'];

    $sql = "UPDATE `votacion_seminario` SET `puntaje` = $points , `votantes` = $votantes   WHERE `votacion_seminario`.`id` = $id";
    //$sql="SELECT * FROM votacion_seminario";
    $resulset = $conexion->insertar($sql);

    if($resulset!=0){

      //Si se chequeó la casilla de recordar usuario:
        /*if($_POST['sesion']){
          //se crea una cookie de sesión:
          ini_set('session.cookie_lifetime', 1800 );
        }*/
        //echo $dni;
        
            //se le abre sesión al usuario por su id
          /*
          $_SESSION['app_id']= $resulset['estudiante_id'];
          $_SESSION['app_usuario']= $resulset['estudiante_dni'];
          $_SESSION['time_online']= time() - (60*6);
          $_GET['view'] = 'aula';
          $_SESSION['name'] = $resulset['estudiante_nombre'];
          */
          
          // echo 1 para que ajax lo tome como un success y me redireccione al index
          $_SESSION['ranking'][$id]['puntaje'] = $points;
          $_SESSION['ranking'][$id]['votantes'] = $votantes + 1;
          echo json_encode($_SESSION['ranking']);
        
     
    }else{
      echo 0;
    }
    
    //verifico si existe ingreso de docente
    
  
 

  $conexion=null;
  $sql=null;
  $resulset=null;

?>

