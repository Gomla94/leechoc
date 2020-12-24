@extends('layouts.front')

@section('styles')

@endsection

@section('content')

    <!--include search-sidebar-->
    <div class="ps-hero ps-hero--shopping bg--cover" data-background="{{asset('h1.png')}}">
      <div class="ps-hero__container">
        <h1 class="ps-hero__heading">{{$categories->name}}</h1>
      </div>
    </div>
    <div class="ps-page--shop">
      <div class="container-fluid">
        <div class="ps-shopping ps-shopping--fullwidth">
            
            <div class="ps-product-box">
              <div class="row" id="ahmed">
              @foreach($products as $product)
                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6 ">
                  <div class="ps-product">
                    <div class="ps-product__thumbnail" style="text-align: center"><img class="product_image" src="{{$product->image}}" alt=""/>
                    </div>
                    <div class="ps-product__content">
                      <div class="ps-product__desc" ><div class="ps-product__title" style="font-family:'Mada', sans-serif;font-size:xx-large">{{$product->name}}</div>
                        <p style="font-family:'Mada', sans-serif;font-size:x-large">{{$product->description}}</p><span class="ps-product__price" style="font-family:'Mada', sans-serif;font-size:xx-large"> ر.س {{$product->price}}</span>
                      </div>
                      <div class="ps-product__shopping"><a class="ps-btn ps-product__add-to-cart" href="#" style="font-family:'Mada', sans-serif;">   اضف الي العرية </a>
                        <div class="ps-product__actions">
                          <div class="form-group--inside">
                            <input type="hidden" class="form-control quantity-input" min=1 value=1>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    
    @section('scripts')
   

  <script src="{{ asset('js/addToCart.js') }}" defer></script>

   @endsection
   @endsection

  