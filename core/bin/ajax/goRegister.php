<?php

  //echo "chatttttt";
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
      //echo "console.log('mirda')";
          //Si se chequeó la casilla de recordar usuario:
            /*if($_POST['sesion']){
              //se crea una cookie de sesión:
              ini_set('session.cookie_lifetime', 1800 );
            }*/
            // devuelve cero para indicar que ya existe el usuario
            echo 0;
    }
    else {
      // insertamos el usuario a la base de datos
          
      $sql2 = "INSERT INTO estudiante ( estudiante_dni, estudiante_nombre, estudiante_email, estudiante_ciudad, estudiante_celular, estudiante_pass)
      VALUES ( '$dni', '$user','$email', '$city', '$phone','$pass')";
      
      $resulset= $conexion->insertar($sql2);
      // echo 1 para comunicar a js el exito de la operación
      
      $_SESSION['app_id']= $resulset['estudiante_id'];
      $_SESSION['app_usuario']= $resulset['estudiante_dni'];
      $_SESSION['time_online']= time() - (60*6);
      
      
      echo 1;      

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

