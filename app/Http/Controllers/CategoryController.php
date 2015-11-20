<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();
        return Redirect::to('admin/category');
    }

    public function getAll(){
        $result = Category::all();
        return view('admin.category', compact('result'));
    }

    public function destroy(Request $request){
        $row = Category::destroy($request->input('id'));
        if($row > 0)
            return "success";
        return "failed";
    }

    public function update (Request $request){
        $row = Category::find($request->input('id'));
        $row->name = $request->input('name1');
        $row->description = $request->input('description1');
        $row->save();
        return Redirect::to('admin/category');
    }

}