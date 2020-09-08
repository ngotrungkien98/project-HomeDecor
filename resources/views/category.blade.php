@extends('layouts.app')
@section('content')

<section class="page-section bg-light" id="Category">

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

@endsection