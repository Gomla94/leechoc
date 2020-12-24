@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        Edit Category
    </div>

    <div class="card-body">
        <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('partials.errors')
            <div class="form-group" id="form" style="margin: 15px;">
                <label for="">Category Name</label>
                <input type="text" class="form-control" name="name" value="{{ $category->name }}">
                <label for="">Category Description</label>
                <input type="text" class="form-control" name="description" value="{{ $category->description }}">
              
                <label for="">Category Image</label>
                <input type="file" class="form-control" name="image" id="input-file" value="{{ $category->image }}">
                
            </div>
            <button class="btn btn-primary">Update Category</button>
        </form>
    </div>
</div>

@endsection