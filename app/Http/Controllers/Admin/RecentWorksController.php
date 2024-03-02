<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\RecentWork;
use App\Http\Controllers\Controller;

class RecentWorksController extends Controller
{
    protected $dirPath = 'admin/img/recent_work_image/';

    public function create(){

        return view('admin.recent_work.create');
    }

    public function store(Request $request){

        $request->validate([
            'category'  => 'required',
            'image' => 'required',
            'status' => 'required'
        ]);

        $work = new RecentWork;
        $work->category = $request->category;
        $work->status = $request->status;

        if ($request->has('image')) {
            $image = $request->file('image'); // name of your input field

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name); // for store in folder

            $work->image = $this->dirPath . $image_name; // for store in database
        }

        $work->save();
        return redirect()->route('admin.recent_work.index')->with('success', 'Record Successfully Inserted');
    }

    public function index(){

        $works = RecentWork::get();
        return view('admin.recent_work.index',compact('works'));
    }

    public function edit($id){

        $work = RecentWork::find($id);
            if (empty($work)) {
                return redirect()->route('admin.recent_work.index');
            }
        return view('admin.recent_work.edit',compact('work'));
    }

    public function update(Request $request,$id){

        $request->validate([
            'image' => 'required_if:old_image,=,null',
            'status' => 'required'
        ]);

        $work = RecentWork::find($id);
        $work->status = $request->status;
        $work->category = $request->category;
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
        return redirect()->route('admin.recent_work.index')->with('success', 'Record Successfully Updated');
    }

    public function destroy($id){

        $work = RecentWork::where('id', $id)->get()->first();

        if (file_exists(public_path($work->image))) {
            @unlink(public_path($work->image));
        }

        $work->delete();
        return redirect()->route('admin.recent_work.index')->with('success', 'Record Deleted');
    }
}
