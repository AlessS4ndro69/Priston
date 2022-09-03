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
        <div class="row justify-content-md-center">
        <div class="col col-lg-3">
        <h2>Resultados para: </h2>
        </div>
        </div>
        <div class="row justify-content-md-center">
        <div class="col col-lg-6">
        <span class = "text-secondary"><h2><p class="font-italic"><?php echo $_SESSION['string']?></p></h2></span>
        </div>
        </div>
  </div>

    <div class="container">
    

      <div class="row my-5">
        <?php

        if(isset($_GET['pg'])){
          $pg = $_GET['pg'];
        }else{
          $pg = 0;
        }  
      

        #print_r(array_values($courses));
        $numberExercises = count($exercises);  
        
        if($numberExercises == 0){
            $msg = '<span class = "text-secondary"><h2> No se encontraron resultados</h2></span>';
            echo $msg;   
        }

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
              </div>
                
              ';
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
        <a class="page-link" href="index.php?view=busquedaejercicio&pg=<?php echo $pg-1?>" >Previous</a>
      <?php
      }
      ?>
      
    </li>
    
    <li class="page-item active"><a class="page-link" href="index.php?view=busquedaejercicio&pg=<?php echo $pg?>">Página <?php echo $pg?></a></li>
    
    <li class="page-item">
      <?php  
      if($pg*3<$numberExercises-1){
      ?>
      <a class="page-link" href="index.php?view=busquedaejercicio&pg=<?php echo $pg+1?>">Next</a>
      <?php  
      }
      ?>
    </li>
  </ul>
</nav>

  <footer class="page-footer bg-image" style="background-image: url(assets/img/world_pattern.svg);">
    <div class="container">
      <div class="row mb-5">
        <div class="col-lg-2 py-3">
          <h3>Academia Priston</h3>
          <p>Forjando Futuro, grupo educativo comprometido con el desarrollo academico del pais.</p>
        </div>
          
         
       
      </div>

      <p class="text-center" id="copyright">Copyright &copy; 2021. This template design and develop by <a href="https://macodeid.com/" target="_blank">MACode ID</a></p>
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