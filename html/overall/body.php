<div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="assets/img/services/service-1.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Aritmética</h5>
              <p>Dominarás las operaciones de la matemática </p>
              <a href="https://t.me/AcademiaPriston" class="btn btn-primary">Mas...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="assets/img/services/service-2.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Álgebra</h5>
              <p>Realizarás calculos de manera rapida y correcta</p>
              <a href="https://t.me/AcademiaPriston" class="btn btn-primary">Mas...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="assets/img/services/service-3.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Razonamiento Matemático</h5>
              <p>Desarrollarás tu capacidad de razonar.</p>
              <a href="https://t.me/AcademiaPriston" class="btn btn-primary">Mas...</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="assets/img/services/service-1.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Psicotécnico</h5>
              <p>Clases practicas con ejercicios en vivo. </p>
              <a href="https://t.me/AcademiaPriston" class="btn btn-primary">Mas...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="assets/img/services/service-2.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Trigonometría</h5>
              <p>Aprende de una manera diferente sin memorizar formulas.</p>
              <a href="https://t.me/AcademiaPriston" class="btn btn-primary">Mas...</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card-service wow fadeInUp">
            <div class="header">
              <img src="assets/img/services/service-3.svg" alt="">
            </div>
            <div class="body">
              <h5 class="text-secondary">Geometría</h5>
              <p>Conoce el estudio de la Geometría con aplicación en la vida real.</p>
              <a href="https://t.me/AcademiaPriston" class="btn btn-primary">Mas...</a>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .container -->
  </div> <!-- .page-section -->


  <div class="page-section">
    <div class="container">
      <div class="text-center wow fadeInUp">
        <div class="subhead">Planes</div>
        <h2 class="title-section">Elige el plan que más se acomode a ti</h2>
        <div class="divider mx-auto"></div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-4 py-3 wow zoomIn">
          <div class="card-pricing">
            <div class="header">
              <div class="pricing-type">Standar</div>
              <div class="price">
                <span class="dollar">S/.</span>
                <h1>180.<span class="suffix">.00</span></h1>
              </div>
              <h5>Al mes</h5>
            </div>
            <div class="body">
              <p>Clases en vivo<span class="suffix"> Interacción </span></p>
              <p>Material de estudio<span class="suffix"> Pdf</span></p>
              <p>Ejercicios en clase<span class="suffix"> Práctica</span></p>
              <p>Ranking todos los meses<span class="suffix"> Competencia</span></p>
              <p>Becas para los mejores alumnos<span class="suffix"> Motivación</span></p>
            </div>
            <div class="footer">
            

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSubscribe" data-whatever="@mdo">Subscribe</button>


            <div class="modal fade" id="ModalSubscribe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="ModalSubscribe">Ingresa tus datos</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <div class="modal-body">
                  <?php
                    include(HTML_DIR . 'formSubscribe.html');
                  ?>
                  
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="validate()">Ingresar</button>
                  </div>
                </div>
              </div>
            </div>
        	</div>
          </div>
        </div>

        <div class="col-lg-4 py-3 wow zoomIn">
          <div class="card-pricing marked">
            <div class="header">
              <div class="pricing-type">Por inicio de ciclo</div>
              <div class="price">
                <span class="dollar">S/.</span>
                <h1>120<span class="suffix">.00</span></h1>
              </div>
              <h5>Al mes</h5>
            </div>
            <div class="body">
              <p>Clases en vivo<span class="suffix"> Interacción </span></p>
              <p>Material de estudio<span class="suffix"> Pdf</span></p>
              <p>Ejercicios en clase<span class="suffix"> Práctica</span></p>
              <p>Ranking todos los meses<span class="suffix"> Competencia</span></p>
              <p>Becas para los mejores alumnos<span class="suffix"> Motivación</span></p>
              <p>Disponibilidad de videos 24/7<span class="suffix"> Ambición</span></p>
            </div>
            <div class="footer">
            

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSubscribe" data-whatever="@mdo">Subscribe</button>


            <div class="modal fade" id="ModalSubscribe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="ModalSubscribe">Ingresa tus datos</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <div class="modal-body">
                  <?php
                    include(HTML_DIR . 'formSubscribe.html');
                  ?>
                  
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="validate()">Ingresar</button>
                  </div>
                </div>
              </div>
            </div>
        	</div>
        </div>
          </div>
        
        
        <div class="col-lg-4 py-3 wow zoomIn">
          <div class="card-pricing">
            <div class="header">
              <div class="pricing-type">Seguidor de tiktok</div>
              <div class="price">
                <span class="dollar">S/.</span>
                <h1>69<span class="suffix">.00</span></h1>
              </div>
              <h5>Al mes</h5>
            </div>
            <div class="body">
              <p>Clases en vivo <span class="suffix"></span></p>
              <p>Mas de 100 videos explicativos  <span class="suffix"></span></p>
              <p>Teoria y práctica <span class="suffix"></span></p>
              <p>Material en pdf <span class="suffix"></span></p>
              <p>24 horas disponible <span class="suffix"></span></p>
            </div>
            <div class="footer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalSubscribe" data-whatever="@mdo">Subscribe</button>


            <div class="modal fade" id="ModalSubscribe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="ModalSubscribe">Ingresa tus datos</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                  <div class="modal-body">
                  <?php
                    include(HTML_DIR . 'formSubscribe.html');
                  ?>
                  
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" onclick="validate()">Ingresar</button>
                  </div>
                </div>
              </div>
            </div>

              </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>  <!--.container --> 
  </div>  <!--.page-section --> 

  <!-- Banner info -->
  <div class="page-section banner-info">
    <div class="wrap bg-image" style="background-image: url(assets/img/bg_pattern.svg);">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 pr-lg-5 wow fadeInUp">
            <h2 class="title-section">Cambiamos el método de  <br> Educación</h2>
            <div class="divider"></div>
            <p>Forma parte de esta comunidad estudiantil y supera tus retos.</p>
            
            <ul class="theme-list theme-list-light text-white">
              <li>
                <div class="h5">Preparación para examenes de admisión</div>
                <p>Inicio de nuevo grupo los dias Lunes</p>
              </li>
              <li>
                <div class="h5">Preparación para la policia, militarizada</div>
                <p>Inicio de nuevo grupo los dias Martes</p>
              </li>
            </ul>
          </div>
          <div class="col-lg-6 py-3 wow fadeInRight">
            <div class="img-fluid text-center">
              <img src="assets/img/banner_image_2.svg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .wrap -->
  </div> <!-- .page-section --> 
 
