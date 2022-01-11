<?php
  // aqui empieza
  include(HTML_DIR . 'overall/header.php');
?>
<body>

<!-- Back to top button -->
<div class="back-to-top"></div>

<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-white sticky" data-offset="500">
    <div class="container">
        
      <a href=base class="navbar-brand">Aprendo Fácil con <span class="text-primary">Priston.</span></a>
      
      

<?php
  include(HTML_DIR . 'overall/topnav.php');
?>
</header> 

<body>  
      <div class="container">
        <div class="page-banner">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-md-6">
              <nav aria-label="Breadcrumb">
                <ul class="breadcrumb justify-content-center py-0 bg-transparent">
                  <li class="breadcrumb-item"><a >Bienvenido</a></li>
                  <li class="breadcrumb-item active" ><?php echo $name?></li>
                </ul>
              </nav>
              <!--<h1 class="text-center"><a href="https://meet.google.com/sgu-rtzz-udd">Ingresar al aula</a></h1>-->
            </div>
          </div>
        </div>
      </div>
    </header>

   
    <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="assets/img/portadas/Aritmetica.png" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Aritmética</h5>
              <p>Dominarás las operaciones de la matemática </p>
              <a href="index.php?view=aula&course=Aritmetica" class="btn btn-primary">Abrir curso</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="assets/img/portadas/Algebra.png" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Álgebra</h5>
              <p>Realizarás calculos de manera rapida y correcta</p>
              <a href="index.php?view=aula&course=Algebra" class="btn btn-primary">Abrir curso</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="assets/img/portadas/Razonamiento.png" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Razonamiento Matemático</h5>
              <p>Desarrollarás tu capacidad de razonar.</p>
              <a href="index.php?view=aula&course=Razonamiento" class="btn btn-primary">Abrir curso</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="assets/img/portadas/Psicotecnico.png" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Psicotécnico</h5>
              <p>Clases practicas con ejercicios en vivo. </p>
              <a href="index.php?view=aula&course=Psicotecnico" class="btn btn-primary">Abrir curso</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="assets/img/portadas/Trigonometria.png" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Trigonometría</h5>
              <p>Aprende de una manera diferente sin memorizar formulas.</p>
              <a href="index.php?view=aula&course=Trigonometria" class="btn btn-primary">Abrir curso</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="assets/img/portadas/Geometria.png" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Geometría</h5>
              <p>Conoce el estudio de la Geometría con aplicación en la vida real.</p>
              <a href="index.php?view=aula&course=Geometria" class="btn btn-primary">Abrir curso</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="assets/img/portadas/Matematica I.png" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Matemática I</h5>
              <p>Conoce el estudio de la Geometría con aplicación en la vida real.</p>
              <a href="index.php?view=aula&course=Matematica I" class="btn btn-primary">Abrir curso</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->



  <?php
  // en el body puedes enbeber funciones de php
  //include(HTML_DIR.'overall/gallery.php');
  include(HTML_DIR. 'overall/footer.php');
?>

</body>
</html>




