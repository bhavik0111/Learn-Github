<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\GlobalSetting;
use App\Http\Controllers\Controller;

class GlobalSettingController extends Controller
{
    protected $dirPath = 'admin/global_setting/logo/';

    public function create(){
        $global = GlobalSetting::get()->first();
        return view('admin.global_setting.create',compact('global'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'favicon'        => 'required_if:old_favicon,=,null',
            'site_title'     => ['required'],
            'logo'           => 'required_if:old_logo,=,null',
            'address'        => ['required'],
            'address2'       => ['required'],
            'phone_no'       => ['required'],
            'mobile_no'      => ['required'],
            'email'          => ['required'],
            'web'            => ['required'],
            'facebook'       => ['required'],
            'instagram'      => ['required'],
            'youtube'        => ['required'],
            'working_time'   => ['required'],
            'google_map'     => ['required'],
            'copyright_msg'  => ['required'],
        ]);

        $global = GlobalSetting::firstOrNew(['id' => 1]);

            //**********images unlink purpose**********
                $req_all = $request->all();

                unset($req_all['favicon'],$req_all['logo']);
                // dd($req_all);
                $global->update($req_all);

                // dd($global->toArray());
            //*******************end*******************

        if ($request->has('favicon')) {

            if (file_exists(($global->favicon))) {
                @unlink(($global->favicon));
            }
            $image = $request->file('favicon');
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name);
            // dd($this->dirPath . $image_name);
            $global->favicon = $this->dirPath . $image_name;
        }

        if ($request->has('logo')) {
            if (file_exists(public_path($global->logo))) {
                @unlink(public_path($global->logo));
            }
            $image = $request->file('logo'); // name of your input field
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name); // for store in folder
            $global->logo = $this->dirPath . $image_name; // for store in database
        }

        $global->save();

        return redirect()->back()->with('success', 'Setting updated');
    }
}
