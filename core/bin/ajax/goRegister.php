<?php

    // Si hubo $_POST, si se recibieron datos en el formulario:
  if(!empty($_POST['user']) and !empty($_POST['dni']) and !empty($_POST['phone']) and !empty($_POST['city']) and !empty($_POST['email'])){

    //Creamos la conexión:
    $conexion= new Datos_modelo();
    $conexion->Conectar();

    $user= htmlentities(addslashes($_POST["user"]));
    $pass= md5($_POST["dni"]);  //password_verify($passDB , $_POST['pass']);
    $dni = $_POST["dni"];
    $city= $_POST["city"];
    $phone= $_POST["phone"];
    //$recibo = $_POST["recibo"];
    $fecha = date('Y-m-d');
    $email = $_POST["email"];

    //echo $user;
    //echo $dni;
    $sql="SELECT * FROM estudiante WHERE (estudiante_dni='$dni' ) LIMIT 1";
    $resulset= $conexion->get_1datos($sql);


    if($resulset!=0){

      //Si se chequeó la casilla de recordar usuario:
        /*if($_POST['sesion']){
          //se crea una cookie de sesión:
          ini_set('session.cookie_lifetime', 1800 );
        }*/

       
        //se le abre sesión al usuario por su id
        $_SESSION['app_id']= $resulset['estudiante_id'];
        $_SESSION['app_usuario']= $resulset['estudiante_dni'];
        $_SESSION['time_online']= time() - (60*6);
        //Pongo echo 1 para que ajax lo tome como un success y me redireccione al index
        //echo 1;
        echo '<div class="container">
      <div class="row">
      
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                
                </div>
      
                    <div class="modal-body">
                      
                      <div class="thank-you-pop">
                        <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
                        <h1 class="fs-title">Thank you!</h1>
                        <h3 class="fs-subtitle"> Alumno registrado anteriormente</h3>
                        <input type="button"  class="submit action-button" onclick="redirection()" value="Cerrar" />
                        
                      </div>
                        
                    </div>
      
        </div>
      </div>
    </div>
  </div>';


    }
    else {
       // insertamos el usuario a la base de datos
       $sql = "INSERT INTO estudiante ( `estudiante_dni`, `estudiante_nombre`, `estudiante_ciudad`, `estudiante_celular`,`estudiante_email`,`estudiante_pass`) 
       VALUES ( '$dni', '$user', '$city', '$phone','$email',$pass)";
       
       $resulset= $conexion->insertar($sql);

       $sql = "INSERT INTO `recibo` (`recibo_dni`, `recibo_fecha`)
       VALUES ('$dni','$fecha')";
       $resulset= $conexion->insertar($sql);

      echo '<div class="container">
      <div class="row">
      
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                
                </div>
      
                    <div class="modal-body">
                      
                      <div class="thank-you-pop">
                        <img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
                        <h1 class="fs-title">Thank you!</h1>
                        <h3 class="fs-subtitle"> Tu subscripción se realizo con exito</h3>
                        <input type="button"  class="submit action-button" onclick="redirection()" value="Cerrar" />
                        
                      </div>
                        
                    </div>
      
        </div>
      </div>
    </div>
  </div>';
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

