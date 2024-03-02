<?php

namespace App\Http\Controllers;

use App\Models\Practice;
use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function create(){
        return view('admin.practice.create');
    }

    public function index(){
        return view('admin.practice.index');
    }

    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'full_name' => 'required',
            'work' => 'required',
            'status' => 'required'
        ]);

        $practice = new Practice;
        $practice->full_name = $request->full_name;
        $practice->work = $request->work;
        $practice->status = $request->status;
        $practice->save();

        return redirect()->route('admin.practice.index')->with('success', 'Record Successfully Inserted');
    }
}
