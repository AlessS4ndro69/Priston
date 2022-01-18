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
              echo '<li class="nav-item active">
                      <a class="nav-link" href="files/Curriculum Vitae.pdf">Descarga pdf</a>
                  </li>';
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
    

    
   <div class ="slider">
     <ul>
       <li><img src= "assets/img/LogoUniversidades/1.png"></li>
       <li><img src= "assets/img/LogoUniversidades/2.png"></li>
       <li><img src= "assets/img/LogoUniversidades/3.png"></li>
       <li><img src= "assets/img/LogoUniversidades/4.png"></li>
       <li><img src= "assets/img/LogoUniversidades/5.png"></li>
       <li><img src= "assets/img/LogoUniversidades/6.png"></li>
       <li><img src= "assets/img/LogoUniversidades/7.png"></li>                     
       <li><img src= "assets/img/LogoUniversidades/8.png"></li>
       <li><img src= "assets/img/LogoUniversidades/9.png"></li>
       <li><img src= "assets/img/LogoUniversidades/10.png"></li>
       <li><img src= "assets/img/LogoUniversidades/11.png"></li>
       <li><img src= "assets/img/LogoUniversidades/12.png"></li>
       <li><img src= "assets/img/LogoUniversidades/13.png"></li>
       <li><img src= "assets/img/LogoUniversidades/14.png"></li>
       <li><img src= "assets/img/LogoUniversidades/15.png"></li>
       <li><img src= "assets/img/LogoUniversidades/16.png"></li>
       <li><img src= "assets/img/LogoUniversidades/17.png"></li>                     
       <li><img src= "assets/img/LogoUniversidades/18.png"></li>
       <li><img src= "assets/img/LogoUniversidades/19.png"></li>
       <li><img src= "assets/img/LogoUniversidades/20.png"></li>
       <li><img src= "assets/img/LogoUniversidades/21.png"></li>
       <li><img src= "assets/img/LogoUniversidades/22.png"></li>
       <li><img src= "assets/img/LogoUniversidades/23.png"></li>
       <li><img src= "assets/img/LogoUniversidades/24.png"></li>
       <li><img src= "assets/img/LogoUniversidades/25.png"></li>
       <li><img src= "assets/img/LogoUniversidades/26.png"></li>
       <li><img src= "assets/img/LogoUniversidades/27.png"></li>                     
       <li><img src= "assets/img/LogoUniversidades/28.png"></li>
       <li><img src= "assets/img/LogoUniversidades/29.png"></li>
       <li><img src= "assets/img/LogoUniversidades/30.png"></li>
       <li><img src= "assets/img/LogoUniversidades/31.png"></li>
       <li><img src= "assets/img/LogoUniversidades/32.png"></li>
       <li><img src= "assets/img/LogoUniversidades/33.png"></li>
       <li><img src= "assets/img/LogoUniversidades/34.png"></li>
       <li><img src= "assets/img/LogoUniversidades/35.png"></li>
       <li><img src= "assets/img/LogoUniversidades/36.png"></li>
       <li><img src= "assets/img/LogoUniversidades/37.png"></li>                     
       <li><img src= "assets/img/LogoUniversidades/38.png"></li>
       <li><img src= "assets/img/LogoUniversidades/39.png"></li>
       <li><img src= "assets/img/LogoUniversidades/40.png"></li>
       <li><img src= "assets/img/LogoUniversidades/41.png"></li>
       <li><img src= "assets/img/LogoUniversidades/42.png"></li>
     </ul>
   </div>

                          
<?php
  //Si no hay un usuario Logueado, se añade el login y el registro de usuario:
  if(!isset($_SESSION['app_id'])){
    //include(HTML_DIR . 'public/login.html');
    //include(HTML_DIR . 'public/reg.html');
    //include(HTML_DIR . 'public/lostpass.html');
  }

?>




