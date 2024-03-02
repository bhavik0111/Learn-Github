<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Admin\Portfolio;
use App\Http\Controllers\Controller;

class PortfolioController extends Controller
{
    protected $dirPath = 'admin/img/portfolio_image/';

    public function create(){

        return view('admin.portfolio.create');
    }

    public function store(Request $request){

        $request->validate([
            'image' => 'required',
            'title' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        $portfolio = new Portfolio;
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->status = $request->status;
        
        if ($request->has('image')) {
            $image = $request->file('image'); // name of your input field

            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name); // for store in folder

            $portfolio->image = $this->dirPath . $image_name; // for store in database
        }

        $portfolio->save();
        return redirect()->route('admin.portfolio.index')->with('success', 'Record Successfully Inserted');
    }

    public function index(){

        $portfolios = Portfolio::get()->all();
        return view('admin.portfolio.index',compact('portfolios'));
    }

    public function edit($id){

        $portfolio = Portfolio::find($id);
            if (empty($portfolio)) {
                return redirect()->route('admin.portfolio.index');
            }
        return view('admin.portfolio.edit',compact('portfolio'));
    }

    public function update(Request $request,$id){

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'status' => 'required'
        ]);

        $portfolio = Portfolio::find($id);
        $portfolio->title = $request->title;
        $portfolio->description = $request->description;
        $portfolio->status = $request->status;
        if ($request->has('image')) {
            if (file_exists(public_path($portfolio->image))) {
                @unlink(public_path($portfolio->image));
            }
            $image = $request->file('image'); // name of your input field
            $image_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path($this->dirPath), $image_name); // for store in folder
            $portfolio->image = $this->dirPath . $image_name; // for store in database
        }

        $portfolio->save();
        return redirect()->route('admin.portfolio.index')->with('success', 'Record Successfully Updated');
    }

    public function destroy($id){

        $portfolio = Portfolio::where('id', $id)->get()->first();
        $portfolio->delete();
        return redirect()->route('admin.portfolio.index')->with('success', 'Record Deleted');
    }
}
