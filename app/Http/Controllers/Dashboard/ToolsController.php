<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Tool;
use Illuminate\Http\Request;

class ToolsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tools = Tool::all();
        return view('dashboard.tools.index',compact('tools'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('dashboard.tools.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|string',
        ]);
        $tool = Tool::create($data);

        return redirect()->route('dashboard.tools.index')->with('success','تم اضاة المهاره بنجاح');
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $tool = Tool::findOrFail($id);
        return view('dashboard.tools.edit', compact('tool'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->validate([
            'name'=>'required|string',
        ]);

        $tools = Tool::findOrFail($id);
        $tools->update($data);
        return redirect()->route('dashboard.tools.index')->with('success','تم تحديث المهاره بنجاح');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tools = Tool::findOrFail($id);
        $tools->delete();
        return redirect()->route('dashboard.tools.index')->with('success','تم حذف المهاره بنجاح');

    }
}
