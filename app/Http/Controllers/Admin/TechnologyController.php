<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Technology;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{

    public function index()
    {

        $technologies = Technology::all();

        return view('admin.technologies.index', compact('technologies'));
    }


    public function create()
    {
        return view('admin.technologies.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $newTecnology = new Technology();
        $newTecnology->name = $data['name'];
        $newTecnology->color = $data['color'];
        $newTecnology->save();

        return redirect()->route('admin.technologies.index');
    }


    public function edit(Technology $technology)
    {

        return view('admin.technologies.edit', compact('technology'));
    }


    public function update(Request $request, Technology $technology)
    {

        $data = $request->all();
        $technology->name =  $data['name'];
        $technology->color =  $data['color'];
        $technology->update();

        return redirect()->route('admin.technologies.index');
    }


    public function destroy(Technology $technology)
    {

        $technology->delete();
        return redirect()->route('admin.technologies.index');
    }
}
