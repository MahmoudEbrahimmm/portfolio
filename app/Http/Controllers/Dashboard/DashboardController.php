<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $messages = Contact::latest()->take(5)->get();
        $projects = Project::latest()->take(5)->get();

        return view('dashboard.index', compact(
            'messages',
            'projects',
        ));
    }
}
