@extends('products.layout')
@section('title')
products
    
@endsection
@section('content')
<div class="container"><a href="{{route('products.create')}}" class="btn btn-primary">create</a></div>


{{-- @if ($message = session::get("Success"))
<div class="container">
    

    <div class="alert alert-primary" role="alert">
    {{$message}}
</div>
</div>
@endif --}}

<div class="container">
    <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">price</th>
        <th scope="col">desc</th>
        <th scope="col">edit/delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($prs as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
        <td>{{$item->desc}}</td>
        <td>
            <a href="{{route('products.edit',$item->id)}}">edit</a>
            <a href="{{route('products.show',$item->id)}}">show</a>
        </td>
        <td>
            <form action="{{route('products.destroy',$item->id)}}" method="POST">
        @csrf
        @method("DELETE")
    <button type="submit" style="btn btn-danger">delete</button>
    </form>
        </td>

      </tr>
      @endforeach
    </tbody>
    </table>
    {{-- {!!$prs->link()!!} --}}
    
    </div>


    
@endsection