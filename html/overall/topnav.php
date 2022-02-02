<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          
          <ul class="navbar-nav ml-auto">
            
          <div class="img-fluid text-center">
              <img src="assets/img/logopriston.png" alt="">
          </div>
            <!--<li class="nav-item">
                <a class="nav-link" href="contact.html">Contacto</a>  
            </li> --> 
            
            <?php
              if(isset($_SESSION['docente'])){
                include(HTML_DIR . 'formUploadFile.html');
              }
              else{
                echo '<li class="nav-item active">
                <a class="nav-link" href="files/Curriculum Vitae.pdf">Descarga pdf</a>
                </li>';
                echo '<li class="nav-item active">
                <a class="nav-link" href="index.php?view=seminario">Seminario</a>
                </li>';
              }
              // si estoy en index
              if(!isset($_GET['view']) and isset($_SESSION['app_id'])){

                echo '<li class="nav-item active">
                <a class="nav-link" href=index.php?view=sala>Aula virtual</a>
                </li>';
              }else{
                
                echo '<li class="nav-item active">
                <a class="nav-link" href=base>Inicio</a>
                </li>';
              }
              
            ?>
            

            
            <?php
            
            
            
            if(!isset($_SESSION['app_id'])){ 
              
              include(HTML_DIR . 'formLogin.html');
              
            }else{
              echo '<li class="nav-item active">
              <a class="nav-link" href="https://drive.google.com/file/d/1XE7tI8lNhNJuio85lESbkIPv9473EaOI/view?usp=sharing">Temario</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="https://drive.google.com/drive/u/0/folders/1jPFVf9JqA5gRxgDrVTC_mdnh7xOhPQO2">Biblioteca </a>
              </li>';
              //echo $_SESSION['app_id'];  
              echo ' <li class="nav-item active">
              <span class="text-primary">' . $_SESSION['name'] .' </span>
              </li>';
              echo ' <li class="nav-item active">
              <a class="nav-link" href="index.php?view=logout"> <img src="assets/img/door-closed.svg"> <span class ="text-danger">Salir</span></a>  
              </li>';
              
            }
            
            ?>  
            
            <!--<li class="nav-item">
              <a class="btn btn-primary ml-lg-2" href="#">Free Analytics</a>
            </li>-->
               <!--Si no hay usuario Logueado, hay que pedirle que se loguee añadiendo los botones:-->
               <?php
               /*
                              if(!isset($_SESSION['app_id'])){
                                  echo '<a class="mbr-buttons__link btn text-white" data-toggle="modal" data-target="#Login">INICIAR SESIÓN</a></li><li class="mbr-navbar__item">
                                 <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__btn btn btn-danger" data-toggle="modal" data-target="#Registro">REGISTRO</a></li></ul></div>
                                ';
                              }
                              else{
                                echo '<a class="mbr-buttons__link btn text-white" href="?view=perfil&id='.$_SESSION['app_id'].'">'. $_SESSION[app_usuario] .'</a></li><li class="mbr-navbar__item">';
                                echo '<a class="mbr-buttons__link btn text-white" href="?view=cuenta">MI PERFIL</a></li><li class="mbr-navbar__item">';
                                echo '<a class="mbr-buttons__link btn text-white" href="?view=logout">CERRAR SESIÓN</a></li><li class="mbr-navbar__item">';
                              }*/
                          ?>
          </ul>
        </div>

      </div>
    </nav>
    

    
   

                          
<?php
  //Si no hay un usuario Logueado, se añade el login y el registro de usuario:
  if(!isset($_SESSION['app_id'])){
    //include(HTML_DIR . 'public/login.html');
    //include(HTML_DIR . 'public/reg.html');
    //include(HTML_DIR . 'public/lostpass.html');
  }

?>




