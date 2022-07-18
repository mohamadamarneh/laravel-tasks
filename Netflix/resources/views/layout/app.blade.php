@include('layout.navbar')
<div class="container">
        <br>
@include('layout.messages')
        @yield('content')

</div>
    

@include('layout.footer')