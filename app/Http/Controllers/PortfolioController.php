<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PortfolioController extends Controller
{
    public function index(){
        $tampilProject = Project::all();
        // dd($tampilProject);
        return view('portfolio.main', compact('tampilProject'));
    }
}
