<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $message = ContactMessage::count();
        $project = Project::count();

        return view('home', compact('message', 'project'));
    }
}
