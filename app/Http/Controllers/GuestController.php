<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class GuestController extends Controller
{
    public function index(){        //

        return view('public.index', [
            'categories' => Category::with('children')->where('parent_id', null)->get()
        ]);
    }
}
