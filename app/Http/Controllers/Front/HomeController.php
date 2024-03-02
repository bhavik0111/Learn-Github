<?php

namespace App\Http\Controllers\Front;

use App\Mail\ContactMail;
use App\Mail\ThankYouMail;
use App\Models\Admin\Flats;
use Illuminate\Http\Request;
use App\Models\Admin\Service;
use App\Models\Admin\Projects;
use App\Models\Admin\Portfolio;
use App\Models\Admin\HomeSlider;
use App\Models\Admin\RecentWork;
use App\Models\Admin\AboutSetting;
use App\Models\Admin\WorkSolution;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $data['homeslider'] = HomeSlider::where('status',1)->get();
        $data['wedo'] = WorkSolution::where('status',1)->get();
        $data['works'] = RecentWork::where('status',1)->get();

        // $data['works'] = RecentWork::where('status',1)->paginate(8);

        $data['wedoall'] = $data['wedo']->splitIn(3)->all();
        $data['services'] = Service::where('status',1)->get()->all();
        return view('front.homepage',$data);
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function service($id)
    {
        $data['services'] = Service::where('status',1)->get()->all();
        $data['service'] = Service::where('id',$id)->where('status',1)->get()->first();
        return view('front.service',$data);
    }

     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function aboutus()
    {
        $data['services'] = Service::where('status',1)->get()->all();
        $data['about'] = AboutSetting::firstOrFail();
        return view('front.aboutus',$data);
    }

    public function flat($type='turnkey_project')
    {
        $data['services'] = Service::where('status',1)->get()->all();
        $data['projects'] = Projects::where('status',1)->where('project_type',$type)->get();
        $data['type'] = $type;
        return view('front.project.project',$data);
    }

    public function show($id)
    {
        $data['services'] = Service::where('status',1)->get()->all();
        $data['project'] = Projects::where('id',$id)->where('status',1)->first();
        return view('front.project.show',$data);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function portfolio()
    {
        $data['services'] = Service::where('status',1)->get()->all();
        $data['portfolios'] = Portfolio::where('status',1)->get()->all();
        return view('front.portfolio',$data);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function contactus()
    {
        $data['services'] = Service::where('status',1)->get()->all();
        return view('front.contactus',$data);
    }

    /**
     * contact us Mail Sending.
     *
     */

    public function contactmailsend(Request $request)
    {

        $request->validate([
            'name'   => 'required',
            'email'   => 'required',
            'phone'   => 'required',
            'messages' => 'required',
        ]);

        // $global = getSetting();
        // $data = $request->all();
        // Mail::to($global->email)->send(new ContactMail($data));

        $data = $request->all();
        // Mail::to('bhavikgondaliya8636@gmail.com')->send(new ContactMail($data));
        Mail::to('vishwakarmafurniturerajkot@gmail.com')->send(new ContactMail($data));
        Mail::to($request->input('email'))->send(new ThankYouMail($data));
        // Mail::to('ravigondaliya0707@gmail.com')->send( ThankYouMail($data));

        return redirect()->route('contactus')->with('msg', 'Thank you for your message. It has been sent Successfully.');
    }
}
