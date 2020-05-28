<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

class GuestController extends Controller
{
    public function index(){        //

        return view('public.index', [
            'categories' => Category::with('children')->where('parent_id', null)->get()
        ]);
    }
    public function getCategoryChildren(Request $request){
        //
        $data =  Product::where('category_id', $request->id)->get();
        return $data;
    }
}
