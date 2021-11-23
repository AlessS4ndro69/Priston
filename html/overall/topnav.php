<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href=base>Inicio</a>
            </li>
            <?php
            //if(!isset($_SESSION['app_id'])){ ?>
            <button type="button" class="btn btn-pricing btn-block" data-toggle="modal" data-target="#loginModal" data-whatever="@mdo">Ingreso</button>
             
             
             <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <?php
                include(HTML_DIR . 'formLogin.html');

              
            //}?>
              
            <li class="nav-item">
              <a class="nav-link" >Contacto</a><!-- href="contact.html" -->
            </li>
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
    
    <div class="container">
      <div class="page-banner home-banner">
        <div class="row align-items-center flex-wrap-reverse h-100">
          <div class="col-md-6 py-5 wow fadeInLeft">
            <h1 class="mb-4">Inicia tu preparación con nosotros</h1>
            <p class="text-lg text-grey mb-5">De la mano de docentes con amplia experiencia lograrás tu objetivo</p>
            <a href="https://t.me/AcademiaPriston" class="btn btn-primary btn-split">Unete al grupo de Telegram <div class="fab"><span class="mai-play"></span></div></a>
          </div>
          <div class="col-md-6 py-5 wow zoomIn">
            <div class="img-fluid text-center">
              <img src="assets/img/logopriston.png" alt="">
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
