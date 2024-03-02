<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\HomeSlider;
use App\Http\Controllers\Controller;

class HomeSliderController extends Controller
{
    protected $dirPath = 'admin/img/home_slider_image/';

    public function create(){

        return view('admin.home_slider.create');
    }

    public function store(Request $request){

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
            'status' => 'required'
        ]);

        $slider = new HomeSlider;
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->status = $request->status;

        if ($request->has('image')) {
            $image = $request->file('image'); // name of your input field

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name); // for store in folder

            $slider->image = $this->dirPath . $image_name; // for store in database
        }

        $slider->save();
        return redirect()->route('admin.home_slider.index')->with('success', 'Record Successfully Inserted');
    }

    public function index(){

        $sliders = HomeSlider::get()->all();
        return view('admin.home_slider.index',compact('sliders'));
    }

    public function edit($id){

        $slider = HomeSlider::find($id);
            if (empty($slider)) {
                return redirect()->route('admin.home_slider.index');
            }
        return view('admin.home_slider.edit',compact('slider'));
    }

    public function update(Request $request,$id){

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required_if:old_image,=,null',
            'status' => 'required'
        ]);

        $slider = HomeSlider::find($id);
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->status = $request->status;

        if ($request->has('image')) {
            if (file_exists(public_path($slider->image))) {
                @unlink(public_path($slider->image));
            }
            $image = $request->file('image'); // name of your input field
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name); // for store in folder
            $slider->image = $this->dirPath . $image_name; // for store in database
        }

        $slider->save();
        return redirect()->route('admin.home_slider.index')->with('success', 'Record Successfully Updated');
    }

    public function destroy($id){

        $slider = HomeSlider::where('id', $id)->get()->first();

        if (file_exists(public_path($slider->image))) {
            @unlink(public_path($slider->image));
        }

        $slider->delete();
        return redirect()->route('admin.home_slider.index')->with('success', 'Record Deleted');
    }
}
