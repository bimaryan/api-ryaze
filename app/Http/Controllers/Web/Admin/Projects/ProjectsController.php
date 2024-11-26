<?php

namespace App\Http\Controllers\Web\Admin\Projects;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('pages.projects.index', compact('projects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
            'sort_description' => 'required|string',
            'description' => 'required|string',
            'technologies' => 'required|string'
        ]);

        $imageFill = $request->file('image')->move('foto_projects', time() . '_' . $request->file('image')->getClientOriginalName());

        Project::create([
            'name' => $request->name,
            'image' => $imageFill,
            'sort_description' => $request->sort_description,
            'description' => $request->description,
            'technologies' => $request->technologies
        ]);

        return Redirect()->back()->with('success', 'Berhasil tambah projects.');
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'name' => 'nullable|string',
            'image' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'sort_description' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'technologies' => 'nullable|string'
        ]);

        if ($request->hasFile('image')) {
            if ($project->foto && File::exists(public_path($project->image))) {
                File::delete(public_path($project->image));
            }

            $imageFill = $request->file('image')->move('foto_projects', time() . '_' . $request->file('image')->getClientOriginalName());
        } else {
            $foto = $project->image;
        }

        $project->update([
            'name' => $request->name,
            'image' => $imageFill,
            'sort_description' => $request->sort_description,
            'description' => $request->description,
            'technologies' => $request->technologies
        ]);

        return Redirect()->back()->with('success', 'Berhasil perbarui projects.');
    }

    public function destroy(Project $project)
    {
        $project->delete();

        return Redirect()->back()->with('success', 'Berhasil hapus projects.');
    }
}
