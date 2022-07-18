<ul>
    @foreach($data as $value)
<li> {{$value->id}} </li>
<li> {{$value->name}} </li>
@endforeach
</ul>
