<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\WorkSolution;
use App\Http\Controllers\Controller;

class WorkSolutionController extends Controller
{
    protected $dirPath = 'admin/img/work_solution_image/';

    public function create(){

        return view('admin.work_solution.create');
    }

    public function store(Request $request){

        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        $work = new WorkSolution;
        $work->title = $request->title;
        $work->description = $request->description;
        $work->status = $request->status;

        if ($request->has('image')) {
            $image = $request->file('image'); // name of your input field

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name); // for store in folder

            $work->image = $this->dirPath . $image_name; // for store in database
        }

        $work->save();
        return redirect()->route('admin.work_solution.index')->with('success', 'Record Successfully Inserted');
    }

    public function index(){

        $works = WorkSolution::get()->all();
        return view('admin.work_solution.index',compact('works'));
    }

    public function edit($id){

        $work = WorkSolution::find($id);
            if (empty($work)) {
                return redirect()->route('admin.work_solution.index');
            }
        return view('admin.work_solution.edit',compact('work'));
    }

    public function update(Request $request,$id){

        $request->validate([
            'image' => 'required_if:old_image,=,null',
            'title' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        $work = WorkSolution::find($id);
        $work->title = $request->title;
        $work->description = $request->description;
        $work->status = $request->status;

        if ($request->has('image')) {
            if (file_exists(public_path($work->image))) {
                @unlink(public_path($work->image));
            }
            $image = $request->file('image'); // name of your input field
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name); // for store in folder
            $work->image = $this->dirPath . $image_name; // for store in database
        }

        $work->save();
        return redirect()->route('admin.work_solution.index')->with('success', 'Record Successfully Updated');
    }

    public function destroy($id){

        $work = WorkSolution::where('id', $id)->get()->first();

        if (file_exists(public_path($work->image))) {
            @unlink(public_path($work->image));
        }

        $work->delete();
        return redirect()->route('admin.work_solution.index')->with('success', 'Record Deleted');
    }
}
