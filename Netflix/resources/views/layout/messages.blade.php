@if(count($errors)>0) 
{{-- this occures through the validation in store function --}}
@foreach ($errors->all() as $error)
    <div class="alert alert-danger">
        {{$error}}
    </div>
@endforeach
@endif

{{-- check the session success --}}

@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif

{{-- check the session errors --}}

@if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
@endif