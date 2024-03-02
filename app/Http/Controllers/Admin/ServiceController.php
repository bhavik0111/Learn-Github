<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Admin\Services;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function create(){

        return view('admin.services.create');
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        $service = new Services;
        $service->title = $request->title;
        $service->slug = Str::slug($request->slug);
        $service->description = $request->description;
        $service->status = $request->status;


        $service->save();
        return redirect()->route('admin.services.index')->with('success', 'Record Successfully Inserted');
    }

    public function index(){

        $services = Services::get()->all();
        return view('admin.services.index',compact('services'));
    }

    public function edit($id){

        $service = Services::find($id);
            if (empty($service)) {
                return redirect()->route('admin.services.index');
            }
        return view('admin.services.edit',compact('service'));
    }

    public function update(Request $request,$id){

        $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        $service = Services::find($id);
        $service->title = $request->title;
        $service->slug = Str::slug($request->slug);
        $service->description = $request->description;
        $service->status = $request->status;

        $service->save();
        return redirect()->route('admin.services.index')->with('success', 'Record Successfully Updated');
    }

    public function destroy($id){

        $service = Services::where('id', $id)->get()->first();


        $service->delete();
        return redirect()->route('admin.services.index')->with('success', 'Record Deleted');
    }
}
