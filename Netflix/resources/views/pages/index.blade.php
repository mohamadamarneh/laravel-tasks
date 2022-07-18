@extends('layout.app')

@section('content')
   
  <p class="container">
    <a class="btn btn-primary btn-lg" href="movies/create" role="button">create</a>
  </p>
</div>
<div class="container">
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">name</th>
      <th scope="col">description</th>
      <th scope="col">gener</th>
      <th scope="col">image</th>
      <th scope="col">Show</th>
      <th scope="col">Edit</th>
      <th scope="col">delete</th>
    </tr>
  </thead>
  <tbody>
    @php
    $i=0;    
    @endphp
    @foreach ($movies as $movie)
         <tr>
      <th scope="row">{{++$i}}</th>
      <td>{{$movie->movie_name}}</td>
      <td>{{$movie->movie_description}}</td>
      <td>{{$movie->movie_gener}}</td>
      

      <td>
        <img src="{{asset('/images/'.$movie->movie_imag)}}" width="70px" height="70px" alt="">
      </td>


      <td>
        <a href="movies/{{$movie->id}}" class="btn btn-success">Show</button></a>
      </td>
      <td>
        <a href="movies/{{$movie->id}}/edit" class="btn btn-primary">Edit</button></a>
      </td>
        <td>



        <form action="{{ route('movies.destroy',$movie->id )}}" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
    
  </tbody>
</table>

</div>
@endsection