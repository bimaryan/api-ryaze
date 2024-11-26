<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index(Request $request)
    {
        $projects = Project::query();

        // Filtering berdasarkan nama (opsional)
        if ($request->has('name')) {
            $projects->where('name', 'like', '%' . $request->name . '%');
        }

        return response()->json([
            'projects' => $projects->get()
        ]);
    }

    public function show($projectName)
    {
        $project = Project::where('name', $projectName)->first();

        if (!$project) {
            return response()->json(['message' => 'Project not found'], 404);
        }

        return response()->json([
            'project' => $project
        ]);
    }
}
