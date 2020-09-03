@extends('layouts.app')
@section('content')
<?php
   use Illuminate\Support\Facades\DB;

   $show = DB::select('select * from News');

   ?>
<div class="container">
   <div class="row justify-content-center">
      <div class="categories__list__post__item">
         <h2>News</h2>
         <div class="row">
            @foreach ($show as $sp)
            <div class="col-lg-5 col-md-6">
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
      </div>
   </div>
</div>
@endsection
