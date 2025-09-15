<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();
        return view('dashboard.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=> ['required','string','max:255'],
            'description'=> ['required','string'],
            'link'=> ['required','string','max:255'],
            'image'=> ['required','image', 'mimes:jpg,jpeg,png,gif,webp', 'max:4096'],
        ]);

        $data = $request->except('image');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = $file->store('uploads/projects/','public');
            $data['image'] = $path;
        }
        $projects = Project::create($data);
        return redirect()->route('dashboard.projects.index')->with('success','تمت ااضافة المشروع بنجاح');

    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('dashboard.projects.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
                $request->validate([
            'name'=> ['required','string','max:255'],
            'description'=> ['required','string'],
            'link'=> ['required','string','max:255'],
            'image'=> ['nullable','image', 'mimes:jpg,jpeg,png,gif,webp', 'max:4096'],
        ]);
        $project = Project::findOrFail($id);
        $old_image = $project->image;

        $data = $request->except('image');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $path = $file->store('uploads/projects/', 'public');
            $data['image'] = $path;
        }
        $project->update($data);
        if($old_image && isset($data['image'])){
            Storage::disk('public')->delete($old_image);
        }
        return redirect()->route('dashboard.projects.index')->with('success','تم تحديث البيانات بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('dashboard.projects.index')->with('success','تم حذف المشروع بنجاح');
    }
}
