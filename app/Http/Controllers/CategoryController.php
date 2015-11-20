<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$category = new Category();
        $category->name = Input::get('name');
        $category->description = Input::get('description');
        $category->save();*/
        return Input::get('name');
    }

}