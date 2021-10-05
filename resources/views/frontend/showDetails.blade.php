@extends('frontend.layout.app')

@section('content')
<!--Section: Block Content-->
<section class="m-5 overflow-hidden">

    <div class="row">
      <div class="col-md-6 mb-4 mb-md-0">
  
        <div id="mdb-lightbox-ui"></div>
  
        <div class="mdb-lightbox">
  
          <div class="row product-gallery mx-1">
  
            <div class="col-12 mb-0">
              <figure class="view overlay rounded z-depth-1 main-img">
                <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                  data-size="710x823">
                  <img src="{{ asset('storage/media') }}/{{ $product->image }}"
                    class="img-fluid z-depth-1">
                </a>
              </figure>
              {{-- <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                  data-size="710x823">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                    class="img-fluid z-depth-1">
                </a>
              </figure>
              <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                  data-size="710x823">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                    class="img-fluid z-depth-1">
                </a>
              </figure>
              <figure class="view overlay rounded z-depth-1" style="visibility: hidden;">
                <a href="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                  data-size="710x823">
                  <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                    class="img-fluid z-depth-1">
                </a>
              </figure> --}}
            </div>
            {{-- <div class="col-12">
              <div class="row">
                <div class="col-3">
                  <div class="view overlay rounded z-depth-1 gallery-item">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/12a.jpg"
                      class="img-fluid">
                    <div class="mask rgba-white-slight"></div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="view overlay rounded z-depth-1 gallery-item">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/13a.jpg"
                      class="img-fluid">
                    <div class="mask rgba-white-slight"></div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="view overlay rounded z-depth-1 gallery-item">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/14a.jpg"
                      class="img-fluid">
                    <div class="mask rgba-white-slight"></div>
                  </div>
                </div>
                <div class="col-3">
                  <div class="view overlay rounded z-depth-1 gallery-item">
                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/15a.jpg"
                      class="img-fluid">
                    <div class="mask rgba-white-slight"></div>
                  </div>
                </div>
              </div>
            </div> --}}
          </div>
  
        </div>
  
      </div>
      <div class="col-md-6 mt-5 pt-5">
  
        <h5>{{ $product->title }}</h5>
       
        <p><span class="mr-1">Price <strong>$12.99</strong></span></p>
        <p class="pt-1">{{ $product->description }}</p>
        
        <hr>
        <div class="table-responsive mb-2">
          <table class="table table-sm table-borderless">
            <tbody>
              <tr>
                <td class="pl-0 pb-0 w-25">Quantity</td>
              </tr>
              <tr>
                <td class="pl-0">
                  <div class="def-number-input number-input safari_only mb-0">
                    
                    <input class="quantity" min="0" name="quantity" value="1" type="number">
                    
                  </div>
                </td>
                
              </tr>
            </tbody>
          </table>
        </div>
        <button type="button" class="btn btn-primary btn-md mr-1 mb-2">Buy now</button>
        <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i
            class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
      </div>
    </div>
  
  </section>
  <!--Section: Block Content-->
@endsection