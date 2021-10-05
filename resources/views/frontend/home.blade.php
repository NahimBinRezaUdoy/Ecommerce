@extends('frontend.layout.app')

@section('content')

@include('frontend.partials._hero')


  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        @foreach ($products as $product)
        <div class="col">
          <div class="card shadow-sm">
            <a href="{{ route('showDetails' , $product->id)}}">
              @if (empty($product->image))
              <img src="{{ asset('img/noImage.jpg') }}" alt="" width="100%" height="100%">
          @else
              <img src="{{ asset('storage/media') }}/{{ $product->image }}"
                  alt="" width="100%" height="100%">
          @endif           
         </a>


            <div class="card-body">
              <p class="card-text">{{ $product->title }}</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary">Add to Cart</button>
                </div>
                <strong class="text-primary">BDT {{ $product->sale_price }}</strong>
              </div>
            </div>
          </div>
        </div>
        @endforeach

        
      </div>
    </div>
  </div>
@endsection