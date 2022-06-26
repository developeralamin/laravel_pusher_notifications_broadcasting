@extends('master')

@section('content')
  
  {{-- @if($errors->any())
    @foreach($errors->all() as $error)
      <div>{{ $error }}</div>
    @endforeach
  @endif --}}

  @if(session()->has('message'))
     <div class="alert alert-danger">
          {{ session('message') }}
     </div>
  @endif


<form action="{{ url('dashboardFormSubmit') }}" method="POST">
     <h2>Add New Post</h2>
    @csrf
     
  <div class="form-group">
    <label for="exampleFormControlInput1">Post Name</label>
      <input type="text" class="form-control @error('name') is-invalid @else is-valid @enderror" name="name">
      
       @error('name')
         <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Post Description</label>
    <textarea cols="10" rows="8" class="form-control @error('description') is-invalid @else is-valid @enderror" name="description">
      
    </textarea>
     @error('description')
         <div class="alert alert-danger">{{ $message }}</div>
      @enderror
  </div>
  
  <div class="form-group mt-2">
    <button type="submit" class="btn btn-danger">Submit</button>
    <a class="btn btn-info" href="{{ url('/') }}">Back</a>
  </div>


</form>


@stop