<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashbord(Request $request){

        return view('admin.dashbord');
    }

    public function profile()
    {
        return view('admin.profile.adminprofile');
    }

    public function profileupdate(Request $request,$id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;

        if (!empty($request->password)) {
            $user->password = bcrypt($request->password);
        }

        $user->save();

        return redirect()->route('admin.dashbord')->with('success', 'Profile Successfully Updated');
    }
}
