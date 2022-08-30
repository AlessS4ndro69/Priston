<?php

  if($_POST){

  //Añadimos el core, y allí está incluida la conexión con sus clases
    require('core/core.php');



    switch (isset($_GET['mode'])? $_GET['mode'] : null) {

      case 'login':

          require('core/bin/ajax/goLogin.php');

        break;

      case 'register':

          require('core/bin/ajax/goRegister.php');
        
        break;

      case 'lostpass':

          require('core/bin/ajax/goLostpass.php');

        break;
      case 'loginAdmin':
        
          require('core/bin/ajax/goLoginAdmin.php');

        break;
    
      case 'download':
        
          require('core/bin/ajax/goDownload.php');

        break;  

      case 'upload':
      
        require('core/bin/ajax/goUpload.php');

      break;  

      case 'votacion':
      
        require('core/bin/ajax/votacion.php');

      break;  

      case 'ranking':
      
        require('core/bin/ajax/ranking.php');

      break;  

      case 'exercises':
      
        require('core/bin/ajax/ejerciciosResueltosPorCurso.php');

      break;  
      //Si la variable es nula, simplemente redirecciona.
      default:
        header("locacion: index.php");
        break;
    }

  }

  else {
    header("locacion: index.php");
  }



?>