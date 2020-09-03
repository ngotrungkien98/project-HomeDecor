@extends('layouts.app')
@section('content')
<div class="container">
   <section>
      {{-- {{print_r(session()->get('cart'))}} --}}
      {{-- thông báo thêm product thành công --}}
      @if (session()->has('success'))
      <div class="alert alert-success">{{ session() -> get('success') }}</div>
      @endif
      <div class="row">
         @foreach ($categoryId as $categoryId)
         <div class="col-md-4">
            <div class="card mb-2">
               <a href="{{ URL::to('productdetail/'.$categoryId->id) }}" >
                  <img class="card-img-top" src="{{ Voyager::image($categoryId -> image) }}">
                  <div class="card-body">
                     <h5 class="card-title">{{ $categoryId -> title }}</h5>
                     <p><strong> $ {{ $categoryId->price }}</strong></p>
               <a href="{{ route('cart.add', $categoryId -> id)}}" class="btn btn-primary">Add to Cart</a>
               </div>
               </a>
            </div>
         </div>
         @endforeach
      </div>
   </section>
</div>
@endsection
