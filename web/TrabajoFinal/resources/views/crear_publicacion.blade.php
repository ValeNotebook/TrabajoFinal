@extends('layouts.master')

@section('contenido')
    
<!-- Registrar Menu  -->

<!-- Arreglar Estetica con CSS y js  -->

<main class="container-fluid pt-5" id="Ingreso">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4">

        <div class="card mb-1">

          <div class="card-header " id="ingresar-menu">
            <span><b>Nueva Publicacion</b></span>
          </div>

          <div class="card-body" id="fondo-menu">

          <div class="mb-3">
            <label for="nom-publicacion" class="form-label">Nombre De La Publicacion</label>
            <input type="text" class="form-control" id="nom-publicacion">
         </div>

         <!-- Barritas a cargar de la base de datos  -->
         <div class="mb-3">
            <label for="nom-trabajo" class="form-label">Tipo De Trabajo</label>
            <input type="text" class="form-control" id="nom-trabajo">
         </div>

        <div class="mb-3">
            <label for="total-pedido" class="form-label">Horario Del Trabajo</label>
            <input  type="number" class="form-control" id="total-pedido" >

        </div>

        <!-- Agregar plugin de calendario  -->

        <div class="mb-3">
            <label for="total-pedido" class="form-label">Fecha Del Trabajo</label>
            <input  type="number" class="form-control" id="total-pedido" >

        </div>

        <div class="mb-3">
            <label for="" class="form-label">Descripcion </label>
            <textarea  id="textito"></textarea>
         </div>

         </div>
        </div>


          <div class="card-footer mb-5" id="fondo-btn-agregar">
            <div class="text-end" style="color: white;" >
              <button type="button" class="btn " style="background: #eec4c4" id="btn_agregar"><b>Agregar</b></button>
          </div>
          </div>
        </div>



          </div>

      </div>

    </div>

        
        
        

        


@endsection