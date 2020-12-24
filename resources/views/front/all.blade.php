@extends('layouts.front')

@section('styles')
<style type="text/css">
	.row{margin: 30px;}
    #col-card{text-align: right;
    }

	@media only screen and (max-width: 600px) {
  .row{display: inline;}
  #col-card{text-align: center;}
}
</style>
@endsection

@section('content')
 <div class="ps-hero ps-hero--shopping bg--cover" data-background="h1.png">
      <div class="ps-hero__container">
        <div class="ps-breadcrumb">
          <ul class="breadcrumb">
            <li>   </li>
          </ul>
        </div>
        <h1 class="ps-hero__heading">  المنتجات  </h1>
      </div>
    </div>

  <div class="ps-page--shop" style="font-family: 'Mada', sans-serif;">
   <div class="container" style="max-width: 900px;">
   	@foreach($categories as $cat)
              <div class="card" style="margin: 10px;">
  <div class="card-body">
   <div class="row">
   	
   	<div class="col">
   		 <div class="ps-product__thumbnail"><img class="product_image" src="{{$cat->image}}" alt=""/><a class="ps-product__overlay"></a>
                    </div>
                   
   	</div>

   	<div class="col" id="col-card" style="font-family: 'Mada', sans-serif;font-size:xx-large">
   		
  <a href="{{ route('filter_products', $cat->id)}}">  <h3 style="color: #9A7A4B;font-family: 'Mada', sans-serif;font-size:xx-large">{{$cat->name}} </h3></a>

    <h4 style="color: #52466B;font-size:x-large"" >{{$cat->desc}}</h4>
   	</div>
   </div>
  </div>
</div>
@endforeach
      </div>
    </div>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
  $( document ).ready(function() {
   $('#store').addClass('active')


  });

</script>
@endsection 