@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{ asset('css/showdetail.css')}}">
@foreach ($productdetail as $products)
<div id="content-wrapper">
		

		<div class="column">
			<img id=featured src="{{ Voyager::image($products -> image) }}">

			<div id="slide-wrapper" >
	
				<div id="slider">
					<img class="thumbnail active" src="{{ Voyager::image($products -> image) }}">
					<img class="thumbnail" src="{{ Voyager::image($products -> image1) }}">
					<img class="thumbnail" src="{{ Voyager::image($products -> image2) }}">

					<img class="thumbnail" src="{{ Voyager::image($products -> image3) }}">
				</div>
			
			</div>
		</div>

		<div class="column">
      <h3 class="title mb-3">{{ $products -> title }}</h3>
			<hr>
       <h3>${{ $products -> price }}</h3>


			<p> {!! $products -> content !!}</p>
         <a href="{{ route('cart.add', $products -> id)}}" class="btn btn-lg btn-outline-primary text-uppercase"> <i class="fas fa-shopping-cart"></i> Add to cart </a>

		</div>

   </div>
   <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
	<script type="text/javascript">
		let thumbnails = document.getElementsByClassName('thumbnail')

		let activeImages = document.getElementsByClassName('active')

		for (var i=0; i < thumbnails.length; i++){

			thumbnails[i].addEventListener('mouseover', function(){
				console.log(activeImages)
				
				if (activeImages.length > 0){
					activeImages[0].classList.remove('active')
				}
				

				this.classList.add('active')
				document.getElementById('featured').src = this.src
			})
		}


		let buttonRight = document.getElementById('slideRight');
		let buttonLeft = document.getElementById('slideLeft');

		buttonLeft.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft -= 180
		})

		buttonRight.addEventListener('click', function(){
			document.getElementById('slider').scrollLeft += 180
		})


	</script>
@endforeach
@endsection