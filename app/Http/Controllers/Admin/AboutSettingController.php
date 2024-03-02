<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\AboutSetting;
use App\Http\Controllers\Controller;

class AboutSettingController extends Controller
{
    protected $dirPath = 'admin/img/about_us_image/';

    public function create(){
        $about = AboutSetting::get()->first();
        return view('admin.about.create', compact('about'));
    }

    public function store(Request $request){

        $request->validate([
            'title' => ['required'],
            'desc'  => ['required'],
            'image' => 'required_if:old_image,=,null',
        ]);

        $about = AboutSetting::firstOrNew(['id' => 1]);

        $about->update($request->only(['title','desc']));

        if ($request->hasFile('image')) {

            if(!empty($about->image)){
                if (file_exists(public_path($about->image))) {
                    unlink(public_path($about->image));
                }
            }
            $image = $request->file('image');
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name);
            $about->image = $this->dirPath . $image_name;
        }

        $about->save();
        return redirect()->back()->with('success', 'Setting updated');
    }

}
