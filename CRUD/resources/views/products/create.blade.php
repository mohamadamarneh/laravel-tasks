@extends('products.layout')
@section('title')
create product
    
@endsection

@section('content')
<div class="container">
    <form action="{{route('products.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="">name: </label><input type="text" name="name">
        </div>
        <div class="form-group">
            <label for="">price: </label><input type="text" name="price">
        </div>
        <div class="form-group">
            <label for="">desc: </label><input type="text" name="desc">
        </div>

        <button type="submit" class="btn btn-danger">add</button>
        
    </form>
</div>


    
@endsection