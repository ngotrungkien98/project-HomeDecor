@extends('layouts.app')
@section('content')
<!-- Masthead-->
<?php

use Illuminate\Support\Facades\DB;

$showProduct = DB::select('select * from brand');
$hotnews = DB::select('select * from news order by id desc limit 3');
$hotproduct = DB::select('select * from products order by id desc limit 4');
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
        <!-- <h5>Third slide label</h5>
        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p> -->
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
</section>



<section class="page-section bg-light">
<div class="container-fluid">
<div style="padding-left: 182px;">
      <h2 class="section-heading text-uppercase">Today Good News</h2>
    </div>

  <div class="row">
    <div class="col-sm-9">
    @foreach ($hotnews as $sp)
    <div class="col-lg-9 col-md-6">
      <div class="categories__post__item__pic set-bg">
        <div class="post__meta">
          <img style="float: left;" src="{{ Voyager::image( $sp->image ) }}" alt="Girl in a jacket" class="img-thumbnail">

        </div>
      </div>
    </div>
    <div class="col-lg-7 col-md-6">
      <div class="categories__post__item__text">
        <h3><a href="{{ URL::to('news/read/'.$sp->id) }}">{{$sp->title}}</a></h3>
        <p>Time: {{$sp->date}}</p>
        <p>{{$sp->content}}</p>
      </div>
    </div>


        @endforeach
    </div>
    <div class="col-sm-3" >
    <h2 style="padding-left: 13px">News Product</h2>
    @foreach ($hotproduct as $pro)
    <div class="col-lg-12 col-md-3">
      <div class="categories__post__item__pic set-bg">
        <div class="post__meta" >
        <img style="float: left;" src="{{ Voyager::image( $pro->image ) }}" alt="Girl in a jacket" class="img-thumbnail">
        <a href="{{ URL::to('productdetail/'.$pro->id) }}" ><h3>{{$pro->title}}</h3></a>
        </div>
        <a href="{{ route('cart.add', $pro -> id)}}" class="btn btn-primary" style="margin-bottom: 50px;">Add to Cart</a>
      </div>
    </div>
    @endforeach
  </div>
  
  </div>
</div>
</section>
@endsection