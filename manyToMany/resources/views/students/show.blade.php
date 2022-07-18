<h2>Student Name: </h2>
<p>{{ $student->fname }}  {{  $student->lname }}</p>

<h3>student Belongs to</h3>

<ul>
    @foreach($student->Claas as $claases)
    <li>{{ $claases->title }}</li>
    @endforeach
</ul>
{{-- select *, category.title 
from students 
Inner join on claases
where students.id = claases.id; --}}