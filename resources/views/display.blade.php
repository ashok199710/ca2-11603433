<p>{{$project->id}}</p>
<p>{{$project->course_name}}</p>

<form method="post" action="/projects/{{ $project->id }}">
                            {{method_field('DELETE')}}
                             {{ csrf_field() }}
                           
                            <button name="btn1">DELETE Project</button>
                        </form>