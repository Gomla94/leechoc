@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        Change Password
    </div>
    
    <div class="card-body">
        <form action="{{ route('changepassword.store') }}" method="POST">
        
            @csrf
            @include('partials.errors')
            <div class="form-group">
                <label for="">New Password</label>
                <input type="password"  class="form-control" name="password">
            </div>
             <button class="btn btn-primary">Change Password</button>
        </form>

    </div>
</div>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


@endsection