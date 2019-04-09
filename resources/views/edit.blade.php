               <fieldset>
                        <legend>Project Specifications</legend>
                        <form method="post" action="/projects/{{ $project->id }}">
                            {{method_field('PATCH')}}
                             @csrf
                          Project course_name:
                        <input type="text" name="course_name" value="{{$project->course_name }}"/>
                            <br/>
                             Project course_id:
                        <input type="text" name="course_id" value="{{$project->course_id }}"/>
                            <br/>
                             Project course_duration:
                        <input type="text" name="course_duration" value="{{$project->course_duration }}"/>
                            <br/>
                             Project course_code:
                        <input type="text" name="course_code" value="{{$project->course_code }}"/>
                            <br/>

                         

                            <button name="btn1">Update Project</button>
                        </form>

                    </fieldset>