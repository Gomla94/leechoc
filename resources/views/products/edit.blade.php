@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        Edit Product
    </div>

    <div class="card-body">
        <form action="{{ route('products.update', $product->id) }}" id="form" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('partials.errors')
            <input type="hidden" name="id" value="{{$product->id}}" id="id">
                  <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" name="name" value="{{$product->name}}">
            </div>
            <div class="form-group">
                <label for="">Product Description</label>
                <input type="text" class="form-control" name="description" value="{{$product->description}}">
            </div>
            <div class="form-group">
                <label for="">Product price</label>
                <input type="number" min=1 class="form-control" name="price" value="{{$product->price}}">
            </div>
            <input type="hidden" name="quantity" value="3">
            <div class="form-group">
                <label for="">Product Image</label>
                <input type="file" class="form-control"  name="x" id="input-file">
            </div>
          <div class="form-group">
                 <label for="">Product Category</label>

                <select class="form-control" name="category_id">
                    <option value="{{$product->category_id}}">{{$product->category->name}}</option>
                    @foreach($categories as $cat)
                     <option value="{{$cat->id}}" >{{$cat->name}}</option>
                    @endforeach

                </select>

            </div>

            <button class="btn btn-primary" type="button" id="add-post">Update Product</button>
        </form>
    </div>
</div>
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script type="text/javascript">
  $( document ).ready(function() {
    console.log( "ready!" );
    var firebaseConfig = {
    apiKey: "AIzaSyCljgDlF6hAknvVntaKxUk9xSk70JzGDAM",
    authDomain: "leecoho-ccd6f.firebaseapp.com",
    databaseURL: "https://leecoho-ccd6f.firebaseio.com",
    projectId: "leecoho-ccd6f",
    storageBucket: "leecoho-ccd6f.appspot.com",
    messagingSenderId: "385951780295",
    appId: "1:385951780295:web:6ab280db2cd87a2fe5dde2",
    measurementId: "G-Q7DEL0VMYX"
  };
    firebase.initializeApp(firebaseConfig);
  // Initialize Firebase
$('#add-post').click(function(event)
{ 
  console.log('updated prod')
         event.preventDefault();

  const file =document.getElementById("input-file").files[0];
  if ( document.getElementById("input-file").files.length > 0) 
  {

  let storageRef = firebase.storage().ref();
let fileRef = storageRef.child(`choco`+file.name);
  console.log('erere')
  fileRef.put(file).then(function(response){
    fileRef.getDownloadURL().then(function(url){
     console.log('uploaded')
    var fireUrl=url;
    console.log(fireUrl)

    $("<input>").attr({ 
                name: "image", 
                 
                type: "hidden", 
                value: fireUrl 
            }).appendTo("#form");
                 console.log(fireUrl)
    $('form').submit(); 
       
 
     
});
  });
  }
  if (document.getElementById("input-file").files.length == 0) {
     $('form').submit(); 

  }
      
      // body.style.backgroundImage = 'none';
    // load_div.style.display = 'block';
    
   
  
});
});
</script>

@endsection
