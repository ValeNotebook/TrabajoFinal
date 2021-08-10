@extends('layouts.master')


@section("contenido")


<!-- Barra de al lado para filtrar directo -->

<!-- Bottom Bar Start -->
<div class="bottom-bar">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-3">
			</div>
			<div class="col-md-6">
				<div class="search">
					<input type="text" placeholder="Buscar">
					<button><i class="fa fa-search"></i></button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="user">
					<a href="{{route('crear_perfil')}}" class="btn perfil">
						<i class="fa fa-heart"></i>
						<span>(0)</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- --> 

<div class="header">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-3">
				<nav class="navbar bg-light">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-home"></i>Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-cerca"></i>Cerca De Ti</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-popu"></i>Populares</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-esporadico"></i>Trabajos Esporadicos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-corto"></i>Trabajos Corto Plazo</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-largo"></i>Trabajos Largo Plazo</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-dinero"></i>Mejor Remunerados</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#"><i class="fa fa-ultimos"></i>Ultimos Publicados</a>
						</li>
					</ul>
				</nav>
			</div>
			</div>
		</div>
	</div>



 <!-- review -->
 <div class="review">
	<div class="container-fluid">
		<div class="row align-items-center review-slider normal-slider">
			<div class="col-md-6">
				<div class="review-slider-item">
					<div class="review-img">
						
					</div>
					<div class="review-text">
						<h2>Nombre De Usuario</h2>
						<h3>Tipo De Uusario</h3>
						<div class="ratting">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>
							Aqui Va Una Valoracion Del Usuario A La Pagina
						</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="review-slider-item">
					<div class="review-img">
						
					</div>
					<div class="review-text">
						<h2>Nombre De Usuario</h2>
						<h3>Tipo De Uusario</h3>
						<div class="ratting">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>
							Aqui Va Una Valoracion Del Usuario A La Pagina
						</p>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="review-slider-item">
					<div class="review-img">
						
					</div>
					<div class="review-text">
						<h2>Nombre De Usuario</h2>
						<h3>Tipo De Uusario</h3>
						<div class="ratting">
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
							<i class="fa fa-star"></i>
						</div>
						<p>
							Aqui Va Una Valoracion Del Usuario A La Pagina
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection



@section("javascript")

    
@endsection


