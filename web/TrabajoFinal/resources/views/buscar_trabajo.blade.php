@extends('layouts.master')





@section("contenido")

<link rel="stylesheet" href="{{asset('css/style.css')}}">

<div style="margin-bottom: 50px;">
	Artículo: <a href="https://iborra.es/blog/barra-de-busqueda/">https://iborra.es/blog/barra-de-busqueda/</a>
	</div>
	
	<section class="section section-default" align="center" style="text-align: -moz-center; text-align: center; background:none; border-bottom: 5px solid #282828;">
	 <div class="col-md-12">
		<div id="sb-search" class="sb-search">
		  <form>
			<input class="sb-search-input" placeholder="Barra de búsqueda expandible..." type="text" name="search">
			<input class="sb-search-submit" type="submit">
			  <span class="sb-icon-search"></span>
		  </form>
		</div>
	   <h4 class="mb-none" style="color:#282828; float:left; position:absolute; margin-top: -7px; font-size:16px;">BARRA DE BÚSQUEDA EXPANDIBLE</h4>
	 </div>
	</section>



@endsection

@section("javascript")

	<script src="{{asset('javascript/busqueda.js')}}"></script>


    
@endsection