@extends('layouts.master')

@section("contenido")


<h1>Hola Soy Crear Publicacion</h1>


<div class="container-fluid pt-5 mx-auto">

  <main class="container-fluid pt-5 mx-auto" id="Menu">
      <div class="row">

        <div class="col-12 col-md-6 col-lg-4">

          <div class="card mb-1">

            <div class="card-header " id="ingresar-menu">
              <span><b>Crear Publicacion</b></span>
            </div>

            <div class="card-body" id="fondo-menu">
              <form class="row g-3">
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Nombre de la Publicacion</label>
                    <input type="email" class="form-control" id="inputEmail4">
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Rubro del Trabajo</label>
                    <input type="password" class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress" class="form-label">Tiempo De Duracion del Trabajo</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
                  <div class="col-12">
                    <label for="inputAddress2" class="form-label">Address 2</label>
                    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
                  </div>
                  <div class="col-md-6">
                    <label for="inputCity" class="form-label">City</label>
                    <input type="text" class="form-control" id="inputCity">
                  </div>
                  <div class="col-md-4">
                    <label for="inputState" class="form-label">State</label>
                    <select id="inputState" class="form-select">
                      <option selected>Choose...</option>
                      <option>...</option>
                    </select>
                  </div>
                  <div class="col-md-2">
                    <label for="inputZip" class="form-label">Zip</label>
                    <input type="text" class="form-control" id="inputZip">
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck">
                      <label class="form-check-label" for="gridCheck">
                        Check me out
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                  </div>
                </form>

            


            <div class="card-footer mb-5" id="fondo-btn-agregar">
              <div class="text-end" style="color: white;" >
                <button type="button" class="btn " style="background: #eec4c4" id="btn_agregar"><b>Agregar</b></button>
            </div>
            </div>
          </div>


  
  
            </div>
  
        </div>

      </div>
</div>

@endsection

