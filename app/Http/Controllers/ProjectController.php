<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function index(){
        $project = Project::all();
        return view('project.index', compact('project'));
    }

    // public function portfolio(){
    //     $project = Project::all();
    //     dd($project);
    //     return view('project.index', compact('project'));
    // }

    public function store(Request $request){
        // dd($request);
        $request->validate([
            'image'         => 'required|mimes:png,jpg,jpeg|max:3084',
            'title'         => 'required',
            'description'   => 'required',
            'link_code'     => 'nullable',
            'link_demo'     => 'nullable',
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

    public function update(Request $request, Project $project){
        $request->validate([
            'image'         => 'nullable|mimes:png,jpg,jpeg|max:3084',
            'title'         => 'required',
            'description'   => 'required',
            'link_code'     => 'nullable',
            'link_demo'     => 'nullable',
        ]);

        // cek apakah gambar ada yg baru, jika tidak maka tidak perlu diubah
        if($request->hasFile('image')){
            if (!empty($project->image) && File::exists(public_path('img/'. $project->image))) {
                File::delete(public_path('img/'. $project->image));
    
                $fileNameImage = time().'_'.uniqid().'.'.$request->image->extension();
                $request->image->move(public_path('img'), $fileNameImage);
                $project->image = $fileNameImage;
            }
    
        }
        $project->title         = $request->title;
        $project->description   = $request->description;
        $project->link_code     = $request->link_code;
        $project->link_demo     = $request->link_demo;

        $project->update();

        // dd($project);
        return redirect()->route('project.index')->with('success', 'Project berhasil diperbarui');
        
    }

    public function destroy(Project $project){
        if (!empty($project->image) && File::exists(public_path('img/'. $project->image))) {
            File::delete(public_path('img/'. $project->image));
        }

        $project->delete();
        return redirect()->route('project.index')->with('success', 'data berhasil dihapus');
    }
}
