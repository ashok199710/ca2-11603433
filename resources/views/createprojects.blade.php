<legend>Create Project</legend>
<form method="post" action="/projects">
	
	{{csrf_field()}}
	<input type="text" name="course_name" placeholder="course_name"/>
	<input type="text" name="course_id" placeholder="course_id"/>
	<input type="text" name="course_code" placeholder="course_code"/>
	<input type="text" name="course_duration" placeholder="course_duration"/>
	
	

	<button>Create Project</button>
	
</form>
@if($errors->any())
<ul>
	@foreach($errors->all() as $error)
	<li>{{ $error }}</li>
	@endforeach
</ul>
@endif
