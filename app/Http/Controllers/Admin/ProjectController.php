<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
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
        $types = Type::all();
        $technologies = Technology::all();
        return view('admin.projects.create', compact('types', 'technologies'));
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
        $newProject->type_id = $data['type_id'];
        $newProject->save();

        if ($request->has('technologies')) {
            $newProject->technologies()->attach($request->technologies);
        }

        return redirect()->route('admin.projects.index');
    }


    public function show(Project $project)
    {

        return view('admin.projects.show', compact('project'));
    }


    public function edit(Project $project)
    {
        $types = Type::all();
        $technologies = Technology::all();
        return view('admin.projects.edit', compact('project', 'types', 'technologies'));
    }



    public function update(Request $request, Project $project)
    {

        $data = $request->all();
        $project->title = $data['title'];
        $project->slug  = Str::slug($data['title'], '-');
        $project->client = $data['client'];
        $project->period = $data['period'];
        $project->summary = $data['summary'];
        $project->type_id = $data['type'];
        $project->update();

        if ($request->has('technologies')) {
            $project->technologies()->sync($request->technologies);
        } else {
            $project->technologies()->detach();
        }
        return redirect()->route('admin.projects.show', $project);
    }


    public function destroy(Project $project)
    {

        $project->delete();
        return redirect()->route('admin.projects.index');
    }
}
