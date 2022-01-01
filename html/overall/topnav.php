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




