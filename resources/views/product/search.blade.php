@extends('layouts.app')
@section('content')
<!-- Masthead-->
<div class="row">
    @foreach ($products as $product)
    <div class="col-md-4">
        <div class="card mb-2">
            <a href="{{ URL::to('productdetail/'.$product->id) }}">
                <img class="card-img-top" src="{{ Voyager::image($product -> image) }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product -> title }}</h5>
                    <p><strong> $ {{ $product->price }}</strong></p>
                    <a href="{{ route('cart.add', $product -> id)}}" class="btn btn-primary">Add to Cart</a>
                </div>
            </a>
        </div>
    </div>
    @endforeach
</div>

@endsection