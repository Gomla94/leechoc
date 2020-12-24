@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        Home Page Text
    </div>
    
    <div class="card-body">
        <form action="{{ route('homepage.update')}}" method="POST">
            @csrf
            @method('PUT')
            @include('partials.errors')
            <div class="form-group">
                <label for="">First Title</label>
                <input type="text" class="form-control" value="{{$homepage->first_title}}" id="first_title" name="first_title">
            </div>
            <div class="form-group">
                <label for="">First Brief</label>
                <input type="text" class="form-control" value="{{$homepage->first_brief}}" id="first_brief" name="first_brief">
            </div>
            <div class="form-group">
                <label for="">First Main Title</label>
                <input type="text" class="form-control" value="{{$homepage->first_main_text}}" id="first_main_text" name="first_main_text">
            </div>
            <div class="form-group">
                <label for="">First Title</label>
                <input type="text" class="form-control" value="{{$homepage->second_title}}" id="second_title" name="second_title">
            </div>
            <div class="form-group">
                <label for="">Second Main Title</label>
                <input type="text" class="form-control" value="{{$homepage->second_main_text}}" id="second_main_text" name="second_main_text">
            </div>
            <div class="form-group">
                <label for="">Third Title</label>
                <input type="text" class="form-control" value="{{$homepage->third_title}}" id="third_title" name="third_title">
            </div>
            <div class="form-group">
                <label for="">Fourth Title</label>
                <input type="text" class="form-control" value="{{$homepage->fourth_title}}" id="fourth" name="fourth_title">
            </div>
            <div class="form-group">
                <label for="">First Working Days</label>
                <input type="text" class="form-control" required value="{{$homepage->working_days}}" id="fourth" name="working_days">
            </div>
            <div class="form-group">
                <label for="">First Working Hours</label>
                <input type="text" class="form-control" required value="{{$homepage->working_hours}}" id="fourth" name="working_hours">
            </div>
            <div class="form-group">
                <label for="">Second Working Days</label>
                <input type="text" class="form-control" required value="{{$homepage->working_days_two}}" id="fourth" name="working_days_two">
            </div>
            <div class="form-group">
                <label for="">Second Working Hours</label>
                <input type="text" class="form-control" required value="{{$homepage->working_hours_two}}" id="fourth" name="working_hours_two">
            </div>
          
            <button class="btn btn-primary">Update Text</button>
        </form>

    </div>
</div>
 
@endsection

@section('scripts')
 
@endsection