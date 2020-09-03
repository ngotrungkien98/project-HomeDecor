@extends('layouts.app')
@section('content')
<!-- Masthead-->
<?php

use Illuminate\Support\Facades\DB;

$showProduct = DB::select('select * from brand');
?>


<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  @foreach ($showProduct as $sp)
  <div class="carousel-inner" id="brand">
    <div class="carousel-item active">
      <img src="{{ Voyager::image( $sp->image1 ) }}" class="d-block w-100" alt="..." style="height: 550px;">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Hoa ne</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p> -->
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ Voyager::image( $sp->image2 ) }}" class="d-block w-100" alt="..." style="height: 550px;">
      <div class="carousel-caption d-none d-md-block">
        <!-- <h5>Ten hinh 2</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
      </div>
    </div>

    <div class="carousel-item">
      <img src="{{ Voyager::image( $sp->image3 ) }}" class="d-block w-100" alt="..." style="height: 550px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
      </div>
    </div>
  </div>
  @endforeach
</div>

<!-- Portfolio Grid-->
<section class="page-section bg-light" id="Category">
  <div class="container">
    <div class="text-center">
      <h2 class="section-heading text-uppercase">Category</h2>
      <h3 class="section-subheading text-muted">
        <p style="color: red">New!!!</p> Products Collection
      </h3>
    </div>

    <div class="row">
      @foreach ($Category as $categories)
      <div class="col-lg-4 col-sm-6 mb-4">
        <div class="portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-caption">
              <a href="{{ URL::to('products/'.$categories->id) }}">

                <img class="img-fluid" src="{{ Voyager::image( $categories->image ) }}" />
              </a>
          </a>
        </div>
      </div>
    </div>
    @endforeach

  </div>
  </div>
</section>

@endsection