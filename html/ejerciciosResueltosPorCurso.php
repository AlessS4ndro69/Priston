<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>AcademiaPriston.</title>

  <link rel="stylesheet" href="assets/css/maicons.css">

  <link rel="stylesheet" href="assets/css/bootstrap.css">

  <link rel="stylesheet" href="assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>
  
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="300">
      <div class="container">
        <a href=base class="navbar-brand">Academia<span class="text-primary">Priston.</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapsed" id="navbarContent">
          <ul class="navbar-nav ml-auto">
          <li class="nav-item">
                <form class="form-inline" action="index.php?view=busquedaejercicio" method = "post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Busqueda de ejercicio" name = "string" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                    <button type="submit"class="btn btn-primary">Buscar</a>
                    </div>
                </div>
                </form>  
            </li>
            <li class="nav-item">
              <a class="nav-link" href=base>Inicio</a>
            </li>
          </ul>
        </div>

      </div>
    </nav>

  
  </header>




  
    <div class="container">
    
      <div class="row my-5">
        <?php

        if(isset($_GET['pg'])){
          $pg = $_GET['pg'];
        }else{
          $pg = 0;
        }  
      

        #print_r(array_values($courses));
        $exercises = $_SESSION[$course];
        $numberExercises = count($exercises);  
        
          for($i = $pg*3 ; $i < $pg*3+3; ++$i) {    // paginación de 3 en 3 ejercicios
              //echo $exercises[$i]['grabacion_pdf'];
            if($i< $numberExercises){
              $msg='<div class="col-lg-4 py-3">
                <div class="card">
                  <div class="header">
                    <div class="post-thumb">
                    <h5 class="post-title">' . $exercises[$i]['bancoEjercicios_course'] . ' - ' .  $exercises[$i]['bancoEjercicios_theme'] . '</a></h5>
                    </div>
                  </div>
                  <div class="body">
                    <div>' . $exercises[$i]['bancoEjercicios_link'] . '</div>
                    <div class="post-date"> <a>' . $exercises[$i]['bancoEjercicios_enunciado'] . '</a></div>
                  </div>
                </div>
              </div>';
              echo $msg;
            }  
            
            
          }
          ?>
      </div>
    </div>
  

  

  <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item ">
      <?php 
      if($pg > 0){
        ?>
        <a class="page-link" href="index.php?view=ejerciciosresueltosporcurso&course=<?php echo $course ?>&pg=<?php echo $pg-1?>" >Previous</a>
      <?php
      }
      ?>
      
    </li>
    
    <li class="page-item active"><a class="page-link" href="index.php?view=ejerciciosresueltosporcurso&course=<?php echo $course ?>&pg=<?php echo $pg?>">Página <?php echo $pg?></a></li>
    
    <li class="page-item">
      <?php  
      if(($pg+1)*3<$numberExercises){
      ?>
      <a class="page-link" href="index.php?view=ejerciciosresueltosporcurso&course=<?php echo $course ?>&pg=<?php echo $pg+1?>">Next</a>
      <?php  
      }
      ?>
    </li>
  </ul>
</nav>
<div class = "container">
  <div class="row justify-content-md-center">
        <div class="col col-lg-10">
        <span class = "text-secondary"><h2><p class="font-italic">Clases particulares con el profesor al whatsapp 925968311</p></h2></span>
        </div>
  </div>
</div>
<footer class="page-footer bg-image" style="background-image: url(assets/img/world_pattern.svg);">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-3 py-3">
          <h3>Priston</h3>
          <p>Academia virtual comprometida con el desarrollo intelectual de la juventud.</p>

          <div class="social-media-button">
            <a href="https://www.facebook.com/prosoralex.tareas"><i class="mai-logo-facebook-f"></i></a>
            <a href="https://www.tiktok.com/@docente_nerito"><img src="assets/img/tiktok.svg" ></a>
             <a href="https://t.me/AcademiaPriston"><i class="mai-logo-telegram"></i></a>
             <a href="https://wa.me/message/KXIXZ7HRFVJ7B1"><i class="mai-logo-whatsapp"></i></a>
          </div>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Compañia</h5>
          <ul class="footer-menu">
            <li><a href="#">Acerca de nosotros</a></li>
            <!--<li><a href="#">Career</a></li>-->
            <li><a href="#">Terminos de servicio</a></li>
            <li><a href="#">Preguntas Frecuentes</a></li>
          </ul>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Contactanos</h5>
          <!--<p>203 Fake St. Mountain View, San Francisco, California, USA</p>-->
          <a href="#" class="footer-link">+51925968311</a>
          <a href="#" class="footer-link">consultas@academiapriston.com</a>
        </div>
        <div class="col-lg-3 py-3">
          <h5>Novedades</h5>
          <p>Proximamente grandes sorpresas.</p>
          <!--<form action="#">
            <input type="text" class="form-control" placeholder="Enter your email..">
            <button type="submit" class="btn btn-success btn-block mt-2">Subscribe</button>
          </form>-->
        </div>
      </div>

      <p class="text-center" id="copyright">Copyright &copy; 2022. This template design and develop by <a href="https://macodeid.com/" target="_blank">MACode ID</a></p>
    </div>
  </footer>

<script src="assets/js/jquery-3.5.1.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/google-maps.js"></script>

<script src="assets/vendor/wow/wow.min.js"></script>

<script src="assets/js/theme.js"></script>

<script src="assets/js/bootstrap.js"> </script>

<script src="views/app/js/functions.js"></script>

<script src="views/app/js/generales.js"></script>





</body>
</html>