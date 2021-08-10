@extends('layouts.master')


@section("contenido")

<!-- Bottom Bar Start -->
<div class="bottom-bar">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-md-3">
			</div>
			<div class="col-md-6">
				<div class="search">
					<input type="text" placeholder="Search">
					<button><i class="fa fa-search"></i></button>
				</div>
			</div>
			<div class="col-md-3">
				<div class="user">
					<a href="wishlist.html" class="btn wishlist">
						<i class="fa fa-heart"></i>
						<span>(0)</span>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Bottom Bar End --> 

 <!-- Review Start -->
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


