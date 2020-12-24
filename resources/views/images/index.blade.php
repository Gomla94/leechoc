@extends('layouts.admin')

@section('styles')
<link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Images Table</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>URL</th>             
                    <th>Actions</th>

                </tr>
                </thead>
                
                <tbody>
                @foreach($images as $image)
                    <tr>
                        <td>{{ $image->name }}</td>
                        <td><img src="{{asset('images/' . $image->image_url) }}" height="100px" width="100px" alt=""></td>
                        <td>
                            <a href="{{ route('images.edit', $image->id) }}" class="btn btn-success btn-sm" style="margin-bottom:3px">Edit</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@section('scripts')

<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('js/demo/datatables-demo.js')}}"></script>
<script src="{{ asset('js/initialize_firebase.js') }}" defer></script>
<script src="{{ asset('js/delete_image_ajax.js') }}" defer></script>
<script src="{{asset('js/delete_firebase.js')}}" defer></script>

<script defer>
    function delete_image(event, image_id) {
      event.preventDefault()
      const image_name = event.target.dataset.image
      delete_firebase(image_name, image_id)
    }
    </script>
@endsection
@endsection