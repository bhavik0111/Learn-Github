<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Projects;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    protected $dirPath = 'admin/img/projects_image/';

    public function create(){

        return view('admin.project.create');
    }

    public function store(Request $request){

        $request->validate([
            'project_type'  => 'required',
            'image' => 'required',
            'status' => 'required'
        ]);

        $project = new Projects;
        $project->project_type = $request->project_type;
        $project->title = $request->title;
        $project->description = $request->description;
        $project->status = $request->status;

        if ($request->has('image')) {
            $image = $request->file('image'); // name of your input field
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name); // for store in folder
            $project->image = $this->dirPath . $image_name; // for store in database
        }

        $project->save();
        return redirect()->route('admin.project.index')->with('success', 'Record Successfully Inserted');
    }

    public function index(){

        $projects = Projects::get();
        return view('admin.project.index',compact('projects'));
    }

    public function edit($id){

        $project = Projects::find($id);
            if (empty($project)) {
                return redirect()->route('admin.project.index');
            }
            // dd($flat);
        return view('admin.project.edit',compact('project'));
    }

    public function update(Request $request,$id){

        $request->validate([
            'image' => 'required_if:old_image,=,null',
            'status' => 'required'
        ]);

        $project = Projects::find($id);
        $project->project_type = $request->project_type;
        $project->title = $request->title;
        $project->description = $request->description;
        $project->status = $request->status;
        if ($request->has('image')) {
            if (file_exists(public_path($project->image))) {
                @unlink(public_path($project->image));
            }
            $image = $request->file('image'); // name of your input field
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name); // for store in folder
            $project->image = $this->dirPath . $image_name; // for store in database
        }

        $project->save();
        return redirect()->route('admin.project.index')->with('success', 'Record Successfully Updated');
    }

    public function destroy($id){

        $project = Projects::where('id', $id)->get()->first();

        if (file_exists(public_path($project->image))) {
            @unlink(public_path($project->image));
        }

        $project->delete();
        return redirect()->route('admin.project.index')->with('success', 'Record Deleted');
    }
}
