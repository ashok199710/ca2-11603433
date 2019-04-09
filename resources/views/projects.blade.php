@foreach($projects as $project)
{{$project->id}}<br>
{{$project->course_name}}<br>
{{$project->course_id}}<br>
{{$project->course_duration}}<br>
{{$project->course_code}}<br>

@endforeach
<br>
<a href="/projects/create" >Create Project</a>