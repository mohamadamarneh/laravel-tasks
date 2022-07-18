@extends('layout.app')
@section('content')
    <h1>{{$movie->title}}</h1>

    
        <div class=' container'>
            <a href="/movies" class="  btn btn-primary">Go Back</a>
            <br>
            <div class='card container'>
                <div class="card" style="width: 300px;">
                <img src="{{asset('/images/'.$movie->movie_imag)}}" class="card-img-top" alt="">
                <div class="card-body text-center">
                    <h5 class="card-title">{{$movie->movie_name}}</h5>
                    <p class="card-text">{{$movie->movie_description}}</p>
                   <p> <small>released on {{$movie->movie_gener}}</small></p>
                    {{-- <a href="/movies/{{$movie->id}}/edit" class="btn btn-primary">edit</a> --}}
                </div>
            </div>
        </div>
        
         
           
            {{-- <a href="/movies/{{$movie->id}}/edit" class="btn btn-success">Edit</a>
            <form action="{{ route('posts.destroy',$movie->id )}}" method="post" class="pull-right">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" class="pull-right">delete</button>
                
                
            </form> --}}
                
        </div>
    

     
@endsection