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
            <li class="nav-item active">
              <a class="nav-link" href="https://drive.google.com/file/d/1u44gvyuaQ0dwIylHWBzV6lCyd6gKmMGa/view?usp=sharing">Descarga pdf</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href=base>Inicio</a>
            </li>
            <?php
            //if(!isset($_SESSION['app_id'])){ ?>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalLogin" data-whatever="@mdo">Ingresar</button>

    
            <div class="modal fade" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="ModalLogin" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="ModalLogin">LOGIN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
              <?php
                include(HTML_DIR . 'formLogin.html');

              
            //}?>

</div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="validate_login()">Ingresar</button>
                  </div>
                </div>
              </div>
            </div>
              
            
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
    

    
    <!-- 16:9 aspect ratio -->


    <div class="container">
     
        <div class="d-flex justify-content-center">
          <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" src=<?php echo $frame[$n]["grabacion_frame"]?>  width="720" height="540" allow="autoplay" loading = "lazy"></iframe>
          </div>
        </div>
     
    </div>

    <div class="container">
      <div class="page-banner home-banner">
      
        
        <div class="row align-items-center flex-wrap-reverse h-100">
          
        
          <div class="col-md-6 py-5 wow fadeInLeft">
            
            <h1 class="mb-4">Inicia tu preparación con nosotros</h1>
            <p class="text-lg text-grey mb-5">De la mano de docentes con amplia experiencia lograrás tu objetivo</p>
            <a href="https://t.me/AcademiaPriston" class="btn btn-primary btn-split">Unete al grupo de Telegram <div class="fab"><span class="mai-logo-telegram"></span></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              
              <img src="assets/img/mat.gif" width="330" height="250">
            </div>
          </div>
        </div>
        <a href="#about" class="btn-scroll" data-role="smoothscroll"><span class="mai-arrow-down"></span></a>
      </div>
    </div>
                          
<?php
  //Si no hay un usuario Logueado, se añade el login y el registro de usuario:
  if(!isset($_SESSION['app_id'])){
    //include(HTML_DIR . 'public/login.html');
    //include(HTML_DIR . 'public/reg.html');
    //include(HTML_DIR . 'public/lostpass.html');
  }

?>


