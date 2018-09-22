<?php get_header(); ?>
<!-- Contact Section -->
        <section class="panel b-green" id="4">
          <div class="panel__wrapper">
            <div class="panel__content">
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-2">
                    <div class="contact-content">
                      <div class="heading">
                        <h4>Contáctanos</h4>
                        <h5>Rellena el siguiente formulario para inscrirte en nuestros cursos.</h5>
                      </div>
                      <div class="row">
                        <div class="col-md-8">
                          <div class="contat-form">
                            <form id="contact" action="" method="post">
                              <fieldset>
                                <input name="name" type="text" class="form-control" id="name" placeholder="Tu nombre" required="">
                              </fieldset>
                              <fieldset>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Tu correo" required="">
                              </fieldset>
                              <fieldset>
                                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Tu mensaje" required=""></textarea>
                              </fieldset>
                              <fieldset>
                                <button type="submit" id="form-submit" class="btn">Enviar</button>
                              </fieldset>
                            </form>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="more-info">
                            <h4>¿Donde estamos ubicados?</h4>
                            <p><em>Avenida siempre viva 2018, Santiago</em></p>
                            <h4>Teléfonos</h4>
                            <p>+56 2 151 6503 | +569 6 950 1213</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
 <?php get_footer(); ?>