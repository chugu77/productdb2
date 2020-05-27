<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Product;
use App\User;

class DashboardController extends Controller
{
    public function index(){

        //testing  array to nested-set
        // $node = Category::create([
        //     'category' => 'Foo',        
        //     'children' => [
        //         [
        //             'category' => 'nika',
        
        //             'children' => [
        //                 [ 'category' => 'mate' ],
        //                 [ 'category' => 'luka' ],
        //                 [ 'category' => 'mariami' ],
        //                 [ 'category' => 'ana' ],
        //             ],
        //         ],
        //     ],
        // ]);

        $categories = Category::with('ancestors')->paginate(30);
        //dd($categories->pluck('category'));
        return view('admin.dashboard',[
            'categories'        => $categories,
            'categoriesCount'   => Category::count(),
            'productsCount'     => Product::count(),
            'usersCount'         => User::count()
        ]);
    }
}
