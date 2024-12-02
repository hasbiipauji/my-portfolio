<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $project = Project::all();
        return view('project.index', compact('project'));
    }

    public function store(Request $request){
        // dd($request);
        $request->validate([
            'image'         => 'required|mimes:png,jpg,jpeg|max:3084',
            'title'         => 'required',
            'description'   => 'required',
            'link_code'     => 'required',
            'link_demo'     => 'required',
        ]);

        $fileNameImage = time().'_'.uniqid().'.'.$request->image->extension();
        //untuk menympan filenya ke folder public
        $request->image->move(public_path('img'), $fileNameImage);

        $project = new Project;
        $project->image         = $fileNameImage;
        $project->title         = $request->title;
        $project->description   = $request->description;
        $project->link_code     = $request->link_code;
        $project->link_demo     = $request->link_demo;
        $project->save();
        return redirect()->route('project.index')->with('success', 'Data Berhasil Ditambahkan');
    }
}
