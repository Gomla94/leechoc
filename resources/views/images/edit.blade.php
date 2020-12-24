@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        Add New Image
    </div>
    
    <div class="card-body">
        <form action="{{ route('images.update', $image->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('partials.errors')
            
            <div class="form-group">
                <label for="">Image Name</label>
                <input type="text" class="form-control classone" readonly id="image_name" name="image_name" value="{{ $image->name }}">
            </div>
            <div class="form-group">
                <label for="">Image Main Text</label>
                <input type="text" class="form-control" id="main_text" name="main_text" value="{{ $image->main_text }}">
            </div>
            <div class="form-group">
                <label for="">Image Brief Text</label>
                <input type="text" class="form-control" id="brief_text" name="brief_text" value="{{ $image->brief_text }}">
            </div>
            <div class="form-group">
                <label for="image">Image <strong style="color:red">(Maximum Size 2 MB)</strong></label>
            <input type="file" id="image" class="form-control classone" name="image" data-image="{{ $image->image_url }}">
            </div>
          
          
            <button class="btn btn-primary">Update Image</button>
        </form>

    </div>
</div>
 
@endsection

@section('scripts')
  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="{{ asset('js/initialize_firebase.js') }}" defer></script>
<script src="{{ asset('js/delete_firebase.js') }}" defer></script>
<script src="{{ asset('js/update_image_ajax.js') }}" defer></script>

<script>

    function uploadImage(event) {
        event.preventDefault()
        const image_uploaded_file = document.querySelector('#image')
        const image_firebase_name = document.querySelector('#image_firebase_name').value
        const image_url = document.querySelector('#image_url')
        const image_name = document.querySelector('#image_name').value
        const image_id = document.querySelector('#image_id').value
        const main_text = document.getElementById('main_text').value;
        const brief_text = document.getElementById('brief_text').value;
        const update_image_form = document.querySelector('#form')
        const inputs = update_image_form.querySelectorAll('.form-control')
        inputs.forEach((input) => {
          if (input.value == '') {
            send_update_image_ajax(image_id, image_name, image_url, image_firebase_name, main_text, brief_text)
            return false
          }
        })
        
        if (main_text.length !== 0 && brief_text.length !== 0) {
            delete_firebase(image_firebase_name, main_text, brief_text, image_id)
            return false
        } 
        
    }
</script>

@endsection