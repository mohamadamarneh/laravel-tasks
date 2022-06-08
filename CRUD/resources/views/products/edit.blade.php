@extends('products.layout')
@section('title')
edit product
    
@endsection

@section('content')
<div class="container">Product name :<b>{{ $product->name}} </b></div>

<div class="container">
    <form action="{{route('products.update',$product->id)}}" method="post">
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="">name: </label><input value="{{ $product->name}}" type="text" name="name">
        </div>
        <div class="form-group">
            <label for="">price: </label><input type="text" value="{{ $product->price}}" name="price">
        </div>
        <div class="form-group">
            <label for="">desc: </label><input type="text"  value="{{ $product->desc}}" name="desc">
        </div>

        {{-- {!!$product->detail !!} --}}

        <button type="submit" class="btn btn-danger">update</button>
        
    </form>
</div>

