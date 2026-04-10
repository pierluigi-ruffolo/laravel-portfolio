<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $types = Type::all();
        $length = count($projects);
        $lengthTypes = count($types);
        return view('admin.dashboard', compact("length", "lengthTypes"));
    }
}
