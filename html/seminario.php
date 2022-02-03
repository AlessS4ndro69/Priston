

<div class="container">
        
        <img src="files/Seminario Matematico.png" class="img-fluid" alt="a" >
        
    
</div>

<div class="page-section">
    <div class="container">
      
      <div class="row">
        <div class="col-lg-6">
            
            <img src="files/1.1.png" class="img-fluid" alt="Responsive image" >
          
        </div>
        <div class="col-lg-6">
            
          <img src="files/1.2.png" class="img-fluid" alt="Responsive image" >
        
        </div>
      </div>
     
      <div class="row">
        <div class="col-lg-6">
            
            <img src="files/1.3.png" class="img-fluid" alt="Responsive image" >
          
        </div>
        <div class="col-lg-6">
            
          <img src="files/1.4.png" class="img-fluid" alt="Responsive image" >
        
        </div>
      </div>
    </div>

      
  <div class="row justify-content-md-center">  

  <div class="col-lg-3 py-3 wow zoomIn">
    <div class="card-pricing">
      <div class="header">
        
        <div class="pricing-type">Pago con tarjeta de crédito</div>
        <img src="files/logovisamaster.png" class="img-fluid" alt="" >
        <div class="price">
          <span class="dollar">S/.</span>
          <h1>10.<span class="suffix">00</span></h1>
        </div>
        
      </div>
      <div class="body">
        <p>Duración de 2 horas<span class="suffix"></span></p>
        <p>Material gratuito<span class="suffix"> </span></p>
        <p>100% Práctico resolución de ejercicios </span></p>
        <p>Clase en vivo, interacción con el profesor  </span></p>
        
        
      </div>
      <div class="footer">
      

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSubscribe1" data-whatever="@mdo">Registro</button>


      <div class="modal fade" id="ModalSubscribe1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ingresa tus datos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="modal-body">
                
            <?php
              include(HTML_DIR . 'formSeminarioPaypal.html');
            ?>
            

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" onclick="validate(1)">Registro</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    
  </div>
  <div class="col-lg-3 py-3 wow zoomIn">
    <div class="card-pricing">
      <div class="header">
        
        <img src="files/logoyapeplin.png" class="img-fluid" alt="" >
        <div class="price">
          <span class="dollar">S/.</span>
          <h1>10.<span class="suffix">00</span></h1>
        </div>
        
      </div>
      <div class="body">
        <p>Duración de 2 horas<span class="suffix"></span></p>
        <p>Material gratuito<span class="suffix"> </span></p>
        <p>100% Práctico resolución de ejercicios </span></p>
        <p>Clase en vivo, interacción con el profesor  </span></p>
        
        
      </div>
      <div class="footer">
      

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSubscribe2" data-whatever="@mdo">Registro</button>


      <div class="modal fade" id="ModalSubscribe2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ingresa tus datos</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="modal-body">
                
            <?php
              include(HTML_DIR . 'formSeminarioYape.html');
            ?>          
              
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-primary" onclick="validate(2)">Registro</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    
  </div>
</div>  
</div>

