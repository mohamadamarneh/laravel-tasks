@extends('layout.app')
@section('content')

<form class="container" action="{{ route('movies.update',$movie->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
  <div class="form-group">
    <label for="Moviename">Movie name</label>
    <input type="text" name="movie_name" class="form-control" id="Moviename" value="{{$movie->movie_name}}">
  </div>
  <div class="form-group">
    <label for="Moviegener">Movie gener</label>
    <input type="date" name="movie_gener" class="form-control" id="Moviegener" value="{{$movie->movie_gener}}">
  </div>
  
  <div class="form-group">
    <label for="Description">Movie Description</label>
    <textarea class="form-control" name= "movie_description" id="Description" rows="3" value="{{$movie->movie_description}}"></textarea>
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
  <button type="submit" class="btn btn-primary">Update</button>
</form>


@endsection