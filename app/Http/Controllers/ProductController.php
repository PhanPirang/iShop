<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Promotion;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\DomCrawler\Field\InputFormField;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getAll(){
        $category = Category::all();
        $promotion = Promotion::all();
        return view('admin.product_add', compact('category','promotion'));
    }

    public function store(Request $request){
        $filename = "";
        if ($request->hasFile('thumbnail')) {
            $file = $request->file('thumbnail');
            $destinationPath = 'admin/assets/uploads/products';
            $filename = str_random(20). $file->getClientOriginalName();
            $upload_success = $file->move($destinationPath, $filename);
        }
        
        $product = new Product();
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->image_path = $filename;
        $product->cat_id = $request->get('category');
        $product->p_s_id = 1;
        $product->promotion_id = $request->get('promotion');
        $product->save();  
        return Redirect::to('admin/product');
    }

    public function destroy(Request $request){

    }

    public function getRecord($id){
        $product = Product::find($id);
        return view('front.single', compact('product'));
    }


}