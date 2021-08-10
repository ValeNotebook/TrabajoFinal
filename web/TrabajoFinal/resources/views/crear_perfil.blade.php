@extends('layouts.master')

@section("contenido")


<!-- Barra de navegacion incompleta --
<div class="breadcrumb-wrap">
  <div class="container-fluid">
      <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Logearse y Registrarse</li>
      </ul>
  </div>
</div>
-- Breadcrumb End -->


<!-- Comienzo del login -->
<div class="login">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-6">    
              <div class="register-form">
                  <div class="row">
                      <div class="col-md-6">
                          <label>Nombre</label>
                          <input class="form-control" type="text" placeholder="Nombre">
                      </div>
                      <div class="col-md-6">
                          <label>Apellido</label>
                          <input class="form-control" type="text" placeholder="Apellido">
                      </div>
                      <div class="col-md-6">
                          <label>E-mail</label>
                          <input class="form-control" type="text" placeholder="E-mail">
                      </div>
                      <div class="col-md-6">
                          <label>Numero Telefonico</label>
                          <input class="form-control" type="text" placeholder="Numero de Telefono">
                      </div>
                      <div class="col-md-6">
                          <label>Contraseña</label>
                          <input class="form-control" type="text" placeholder="Contraseña">
                      </div>
                      <div class="col-md-6">
                          <label>Verifique Contraseña</label>
                          <input class="form-control" type="text" placeholder="Contraseña">
                      </div>
                      <div class="col-md-12">
                          <button class="btn">Registrarme</button>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-lg-6">
              <div class="login-form">
                  <div class="row">
                      <div class="col-md-6">
                          <label>E-mail / Nombre de Usuario</label>
                          <input class="form-control" type="text" placeholder="E-mail / Username">
                      </div>
                      <div class="col-md-6">
                          <label>Contraseña</label>
                          <input class="form-control" type="text" placeholder="Contraseña">
                      </div>
                      <div class="col-md-12">
                          <div class="custom-control custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="newaccount">
                              <label class="custom-control-label" for="newaccount">Mantenme Conectado</label>
                          </div>
                      </div>
                      <div class="col-md-12">
                          <button class="btn">Ingresar</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- Login Fin -->

 <!-- Pie de Pagina -->
 <div class="footer">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-3 col-md-6">
              <div class="footer-widget">
                  <h2>Contactanos</h2>
                  <div class="contact-info">
                      <p><i class="fa fa-map-marker"></i>Direccion</p>
                      <p><i class="fa fa-envelope"></i>soporte.buscartrabajo@email.com</p>
                      <p><i class="fa fa-phone"></i>+56986439424</p>
                  </div>
              </div>
          </div>
          
          <div class="col-lg-3 col-md-6">
              <div class="footer-widget">
                  <h2>Redes Sociales</h2>
                  <div class="contact-info">
                      <div class="social">
                          <a href=""><i class="fab fa-twitter"></i></a>
                          <a href=""><i class="fab fa-facebook-f"></i></a>
                          <a href=""><i class="fab fa-linkedin-in"></i></a>
                          <a href=""><i class="fab fa-instagram"></i></a>
                          <a href=""><i class="fab fa-youtube"></i></a>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-lg-3 col-md-6">
              <div class="footer-widget">
                  <h2>Informacion De La Compañia</h2>
                  <ul>
                      <li><a href="#">Sobre Nosotros</a></li>
                      <li><a href="#">Politica De Privacidad</a></li>
                      <li><a href="#">Terminos Y Condiciones</a></li>
                  </ul>
              </div>
          </div>
<!-- Fin Pie De Pagina-->

@endsection

