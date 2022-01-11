<?php

    // Si hubo $_POST, si se recibieron datos en el formulario:
  if(!empty($_POST['dni']) and !empty($_POST['pass'])){

    //Creamos la conexión:
    $conexion= new Datos_modelo();
    $conexion->Conectar();

    $dni= htmlentities(addslashes($_POST["dni"]));
    $pass= md5($_POST["pass"]);  //password_verify($passDB , $_POST['pass']);
    
    //echo $pass;
    //echo $dni;
    $sql="SELECT * FROM estudiante WHERE (estudiante_dni='$dni' and estudiante_pass='$pass' ) LIMIT 1";
    $resulset= $conexion->get_1datos($sql);

    if($resulset!=0){

      //Si se chequeó la casilla de recordar usuario:
        /*if($_POST['sesion']){
          //se crea una cookie de sesión:
          ini_set('session.cookie_lifetime', 1800 );
        }*/
        //echo $dni;
         //se le abre sesión al usuario por su id
         $_SESSION['app_id']= $resulset['estudiante_id'];
         $_SESSION['app_usuario']= $resulset['estudiante_dni'];
         $_SESSION['time_online']= time() - (60*6);
         $_GET['view'] = 'aula';
         $_SESSION['name'] = $resulset['estudiante_nombre'];
         //Pongo echo 1 para que ajax lo tome como un success y me redireccione al index
        echo 1;
    }
    //verifico si existe ingreso de docente
    else {
      $sql="SELECT * FROM docente WHERE (docente_dni='$dni' and docente_pass='$pass' ) LIMIT 1";
      $resulset= $conexion->get_1datos($sql);
      if($resulset!=0){

        //Si se chequeó la casilla de recordar usuario:
          /*if($_POST['sesion']){
            //se crea una cookie de sesión:
            ini_set('session.cookie_lifetime', 1800 );
          }*/
          //echo $dni;
           //se le abre sesión al usuario por su id
           $_SESSION['app_id']= $resulset['docente_id'];
           $_SESSION['app_usuario']= $resulset['docente_dni'];
           $_SESSION['time_online']= time() - (60*6);
           $_SESSION['name'] = $resulset['docente_nombre'];
           $_SESSION['docente'] = 1;
           //Pongo echo 1 para que ajax lo tome como un success y me redireccione al index
          echo 1;
        }
        else{
          echo '<div class="alert alert-dismissible alert-danger">
          <button type="button" class="close" data-dismiss="alert">x</button>
          <strong>Usuario no encontrado</strong>
          Por favor, verifique los datos   y vuelva a intentarlo.
          </div>';
        }
      
        
        
    }



  }

  //No se recibieron datos en el formulario:
  else {

    echo '<div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>Debe rellenar los datos!</strong>
        Por favor, rellene todo el formulario y vuelva a intentarlo.
        </div>';
  }

  $conexion=null;
  $sql=null;
  $resulset=null;

?>

