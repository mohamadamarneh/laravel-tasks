@extends('products.layout')

@section('title')
show product
    
@endsection

@section('content')
<div class="container">Product name :<b>{{$product->name}} </b></div>

<div class="container">
    
        @csrf
        @method("PUT")
        <div class="form-group">
            <label for="">name: {{ $product->name}} </label>
        <div class="form-group">
            <label for="">price: {{ $product->price}} </label>
        </div>
        <div class="form-group">
            <label for="">desc: {{ $product->desc}} </label>
        </div>

        
</div>
