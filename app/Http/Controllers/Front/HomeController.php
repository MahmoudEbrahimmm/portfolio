<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Tool;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $tools = Tool::all();
        $projects = Project::latest()->get();
        return view('home',compact('tools','projects'));
    }
}
