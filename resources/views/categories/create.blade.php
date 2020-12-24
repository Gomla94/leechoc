@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        Add New Category
    </div>
    
    <div class="card-body">
        <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @include('partials.errors')
            <div class="form-group" style="margin: 15px;">
                <label for="">Category Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                <label for="">Category Description</label>
                <input type="text" class="form-control" name="description" value="{{ old('description') }}">
              
                <label for="">Category Image</label>
                <input type="file" class="form-control" name="image" value="">
                
            </div>
             <button class="btn btn-primary">Create Category</button>
        </form>
    </div>
</div>

@section('scripts')

@endsection
@endsection