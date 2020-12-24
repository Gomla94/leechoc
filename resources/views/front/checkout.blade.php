@extends('layouts.front')

@section('styles')

@endsection

@section('content')
<div class="ps-page">
      <div class="ps-hero bg--cover" data-background="{{asset('h1.png')}}">
        <div class="ps-hero__container">
         
          <h1 class="ps-hero__heading">العربه</h1>
        </div>
      </div>
      <div class="container">
        <div class="ps-shopping-cart">
          <div class="table-responsive">
            <table class="table ps-table ps-table--shopping-cart">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Unit Price</th>
                  <th></th>
                </tr>
              </thead>
              <tbody id="table-body">
                <tr>
                  
                </tr>
              </tbody>
            </table>
          </div>
         
          <div class="ps-section__footer">
          <div class="ps-checkout">
          <div class="ps-checkout__left">
           
            
          </div>
          
        </div>
            
          </div>
        </div>
      </div>
    </div>   

@endsection
    
@section('scripts')
<script src="{{ asset('/js/validateCart.js') }}" defer></script>
<script src="{{ asset('/js/checkout.js') }}" defer></script>
@endsection
