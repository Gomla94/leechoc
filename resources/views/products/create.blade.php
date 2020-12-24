@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        Add New Product
    </div>
    
    <div class="card-body">
        <form action="{{ route('products.store') }}" id="form" method="POST" enctype="multipart/form-data">
        
            @csrf
            @include('partials.errors')
            <div class="form-group">
                <label for="">Product Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="form-group">
                <label for="">Product Description</label>
                <input type="text" class="form-control" name="description">
            </div>
            <div class="form-group">
                <label for="">Product price</label>
                <input type="number" min=1 class="form-control" name="price">
            </div>
            <input type="hidden" name="quantity" value="3">
            <div class="form-group">
                <label for="">Product Image</label>
                <input type="file" class="form-control"  name="image" id="input-file">
            </div>
          <div class="form-group">
                 <label for="">Product Category</label>
                <select class="form-control" name="cat">
                    @foreach($categories as $cat)
                     <option value="{{$cat->id}}" >{{$cat->name}}</option>
                    @endforeach

                </select>

            </div>
          
            <button class="btn btn-primary">Create Product</button>
        </form>

    </div>
</div>

@endsection