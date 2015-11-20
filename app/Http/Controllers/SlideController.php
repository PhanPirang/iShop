<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Slide;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $filename = "";
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = 'admin/assets/uploads/slides';
            $filename = str_random(20). $file->getClientOriginalName();
            $upload_success = $file->move($destinationPath, $filename);
        }

        $slide = new Slide();
        $slide->caption = $request->get('caption');
        $slide->description = $request->get('description');
        $slide->order = $request->get('order');
        $slide->status = $request->get('status');
        $slide->image_url = $filename;
        $slide->save();
        return Redirect::to('admin/slide');

    }



    public function getAll(){
        $slides = Slide::all();
        return view('admin.slide',compact('slides'));
    }

    public function destroy(Request $request){
        $slide = Slide::destroy($request->input('id'));
        if($slide > 0)
            return "success";
        return "failed";
    }

    public function update (Request $request){
        $slide = Slide::find($request->input('id'));
        $slide->caption = $request->input('caption1');
        $slide->description = $request->input('description1');
        $slide->order = $request->get('order1');
        $slide->status = $request->get('status1');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $destinationPath = 'admin/assets/uploads/slides';
            $filename = str_random(20). $file->getClientOriginalName();
            $upload_success = $file->move($destinationPath, $filename);
            $slide->image_url = $filename;
        }
        $slide->save();
        return Redirect::to('admin/slide');
    }

    public function getSlideShow(){
        $slides = Slide::all();
        $product = Product::all();
        return view('front.index',compact('slides','product'));
    }

}