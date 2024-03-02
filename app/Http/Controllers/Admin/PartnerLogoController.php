<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\PartnerLogo;
use App\Http\Controllers\Controller;

class PartnerLogoController extends Controller
{
    protected $dirPath = 'admin/img/partners_logo/';

    public function create(){
        return view('admin.logos.create');
    }

    public function store(Request $request){

        $request->validate([
            'image' => 'required',
            // 'link' => 'required',
            'status' => 'required'
        ]);

        $logo = new PartnerLogo;
        $logo->link = $request->link;
        $logo->status = $request->status;

        if ($request->has('image')) {
            $image = $request->file('image');
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name);
            $logo->image = $this->dirPath . $image_name;
        }

        $logo->save();

        return redirect()->route('admin.logos.index')->with('success', 'Record Successfully Inserted');
    }

    public function index(){

        $logos = PartnerLogo::get()->all();
        return view('admin.logos.index',compact('logos'));
    }

    public function edit($id){

        $logo = PartnerLogo::find($id);
            if (empty($logo)) {
                return redirect()->route('admin.logos.index');
            }
        return view('admin.logos.edit',compact('logo'));
    }

    public function update(Request $request,$id){

        $request->validate([
            'image' => 'required_if:old_image,=,null,$id',
            // 'link'  => 'required',
            'status' => 'required'
        ]);

        $logo = PartnerLogo::find($id);
        $logo->link = $request->link;
        $logo->status = $request->status;

        if ($request->has('image')) {

            if (file_exists(public_path($logo->image))) {
                @unlink(public_path($logo->image));
            }
            $image = $request->file('image');
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name);
            $logo->image = $this->dirPath . $image_name;
        }

        $logo->save();

        return redirect()->route('admin.logos.index')->with('success', 'Record Successfully Updated');
    }

    public function destroy($id){

        $logo = PartnerLogo::where('id', $id)->get()->first();

        if (file_exists(public_path($logo->image))) {
            @unlink(public_path($logo->image));
        }

        $logo->delete();

        return redirect()->route('admin.logos.index')->with('success', 'Record Deleted');
    }
}
