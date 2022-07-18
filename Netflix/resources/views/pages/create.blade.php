@extends('layout.app')
@section('content')

<form class="container" action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="Moviename">Movie name</label>
    <input type="text" name="movie_name" class="form-control" id="Moviename" placeholder="movie name">
  </div>
  <div class="form-group">
    <label for="Moviegener">Movie gener</label>
    <input type="date" name="movie_gener" class="form-control" id="Moviegener" placeholder="movie gener">
  </div>
  
  <div class="form-group">
    <label for="Description">Movie Description</label>
    <textarea class="form-control" name= "movie_description" id="Description" rows="3"></textarea>
  </div>
  <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Upload</span>
  </div>
  <div class="custom-file">
    <input type="file" name='movie_imag'  id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
    @error('movie_imag')
    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
    @enderror
  </div>
</div>
  <button type="submit" class="btn btn-primary">create</button>
</form>


@endsection