<?php

namespace App\Http\Controllers\Admin;

Use DB;
use App\Category;
use Illuminate\Http\Request;
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
        return view('admin.categories.index',[
            'categories' => Category::paginate(12)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create', [
            'category'   => [],
            'categories' => Category::with('children')->where('parent_id', null)->get(),
            'delimiter'  => ""
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Category::create($request->all());
        // return redirect()->route('admin.category.index');       
        
        // $node = new Category($attributes);
        // $node->parent_id = 0;
        // $node->save();

        //dd($request);
        // $parent_id = $request['parent_id'];        
        // $attributes = [
        //      'category' =>  $request['category']
        //  ];
    
        //     $parent = Category::ancestorsAndSelf($parent_id)->first();
        //     if ($parent) {
        //         dd('1', $parent);
        //         Category::create($attributes, $parent) ;
        //     } else {
        //         dd('0', $parent);
        //         Category::create($attributes); 
        //     }

        // $parent = new Category;
        // $parent->id = $request['parent_id'];
        // $parent->category = 'parent';
        //dd($parent);

        $node = new Category(['category'=>$request['category']]);
        $node->parent_id =  $request['parent_id']; 
        
        DB::beginTransaction();
        try {
            $node->save();
            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            Log::error($e->errorMessage());
            throw $e;
        }

        return(redirect()->route('admin.category.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('admin.categories.edit',[
            'category'  => $category,
            'categories' => Category::with('children')->where('parent_id', null)->get(),
            'delimiter'  => ""
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $newParent = Category::find($request['parent_id']);
        if ( ! $newParent->isDescendantOf($category)){
            DB::beginTransaction();
            try {
                
                $category->appendToNode($newParent)->save();                
                DB::commit();

            } catch (Exception $e) {
                DB::rollback();
                Log::error($e->errorMessage());
                throw $e;
            }            
        } else {
            return(' node can not be moved under descendendat node ');
        }

        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        
            DB::beginTransaction();
            try {
                
                $category->delete();
                DB::commit();

            } catch (Exception $e) {
                DB::rollback();
                Log::error($e->errorMessage());
                throw $e;
            }            
        

        return redirect()->route('admin.category.index');
    }

    public function truncate(){

        Category::truncate();
   
        return redirect()->route('admin.category.index');
    }

    public function fill(){
        DB::beginTransaction();
        try {
            Category::truncate();

            $node = Category::create([
                'category' => 'პროდუქცია',
            
                'children' => [
                    [
                        'category' => 'საყოფაცხოვრებო ტექნიკა',
            
                        'children' => [
                            [ 'category' => 'მაცივრები' ],
                        ],
                    ],
                    [
                        'category' => 'დაზგა-დანადგარები'
                    ],
                ],
            ]);    

            DB::commit();
        } catch (Exception $e) {
            DB::rollback();
            Log::error($e->errorMessage());
            throw $e;
        } 
       
        
            return redirect()->route('admin.category.index');
    }
}
