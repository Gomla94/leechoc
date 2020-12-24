@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        Add New Image
    </div>
    
    <div class="card-body">
        <form action="{{ route('images.store') }}" id="form" method="POST" enctype="multipart/form-data">
        
            @csrf
            @include('partials.errors')
            <div class="form-group">
                <label for="">Image Name</label>
                <input type="text" class="form-control" id="image_name" name="image_name">
            </div>
            <div class="form-group">
                <label for="">Image Main Text</label>
                <input type="text" class="form-control" id="main_text" name="main_text">
            </div>
            <div class="form-group">
                <label for="">Image Brief Text</label>
                <input type="text" class="form-control" id="brief_text" name="brief_text">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" id="image" class="form-control" name="image">
            </div>
          
          
            <button class="btn btn-primary">Add Image</button>
        </form>

    </div>
</div>
 
@endsection

@section('scripts')
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="{{ asset('js/initialize_firebase.js') }}" defer></script>
<script src="{{ asset('js/upload_firebase.js') }}" defer></script>
<script src="{{ asset('js/create_image_ajax.js') }}" defer></script>

<script>

    function uploadImage(event) {
        event.preventDefault()
        const image_uploaded_file = document.querySelector('#image')
        const image_name = document.querySelector('#image_name').value
        const create_course_form = document.querySelector('#form')
        const inputs = create_course_form.querySelectorAll('.form-control')
        const main_text = document.getElementById('main_text');
        const brief_text = document.getElementById('brief_text').value;
        
        inputs.forEach((input) => {
          if (input.value == '') {
            send_create_image_ajax(image_name, image_uploaded_file.value, main_text, brief_text)
            return false
          }
        })
        

        if (image_uploaded_file.value.length == 0 || image_name.value == '') {
            return false
        } else {
            firebase_upload()
        } 
        
    }
</script>

@endsection