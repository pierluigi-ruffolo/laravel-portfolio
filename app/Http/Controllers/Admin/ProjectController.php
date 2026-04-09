<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProjectController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        return view('admin.projects.index', compact('projects'));
    }



    public function create()
    {

        return view('admin.projects.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $newProject = new Project();
        $newProject->title = $data['title'];
        $newProject->slug = Str::slug($data['title'], '-');
        $newProject->client = $data['client'];
        $newProject->period = $data['period'];
        $newProject->summary = $data['summary'];
        $newProject->type = $data['type'];
        $newProject->save();
        return redirect()->route('admin.projects.index');
    }


    public function show(Project $project)
    {

        return view('admin.projects.show', compact('project'));
    }


    public function edit(Project $project)
    {

        return view('admin.projects.edit', compact('project'));
    }



    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        $project->title = $data['title'];
        $project->slug  = Str::slug($data['title'], '-');
        $project->client = $data['client'];
        $project->period = $data['period'];
        $project->summary = $data['summary'];
        $project->type = $data['type'];
        $project->update();
        return redirect()->route('admin.projects.show', $project);
    }


    public function destroy(Project $project)
    {

        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}
