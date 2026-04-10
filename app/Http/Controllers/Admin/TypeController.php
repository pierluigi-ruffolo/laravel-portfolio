<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{

    public function index()
    {
        $types = Type::all();
        return view('admin.types.index', compact('types'));
    }


    public function create()
    {
        return view('admin.types.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();
        $newType = new Type();
        $newType->name = $data['name'];
        $newType->description = $data['description'];
        $newType->save();
        return redirect()->route('admin.types.index');
    }


    public function show(string $id) {}


    public function edit(Type $type)
    {

        return view('admin.types.edit', compact('type'));
    }


    public function update(Request $request, Type $type)
    {
        $data = $request->all();
        $type->name = $data['name'];
        $type->description = $data['description'];
        $type->save();
        return redirect()->route('admin.types.index');
    }


    public function destroy(Type $type)
    {

        $type->delete();
        return redirect()->route('admin.types.index');
    }
}
