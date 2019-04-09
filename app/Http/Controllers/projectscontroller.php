<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Project;
class projectscontroller extends Controller
{
     public function index()
   {
   	$project=new \App\Project;
   	$projects=$project::all();
   	return view("projects")->with(["projects"=>$projects]);
   }

   public function create()
   {
   	return view("createprojects");
   }

    public function store()
   {
   	$project=new \App\Project;
   	 $project->course_name=request('course_name'); 
   	 $project->course_id=request('course_id');  
   	 $project->course_code=request('course_code'); 
   	 $project->course_duration=request('course_duration'); 
   	 $project->save();
   	 return redirect('/projects');
}

  
public function edit(Project $project)
    {
   		return view('edit',compact('project'));
   	}

   	public function update(Project $project)
   {
   		$project->course_name=request('course_name');
   		$project->course_id=request('course_id');
   		$project->course_duration=request('course_duration');
   		$project->course_code=request('course_code');
   		$project->update();
   		return redirect('/projects'); 
   	}
   	public function show(Project $project)
   	{
   		return view('display',compact('project'));
   	}
   	public function destroy(Project $project)
   	{
   		$project->delete();
   		return redirect('/projects');
   	}
}


