<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $category = factory(App\Category::class, 25)->create();
        $categories = App\Category::where('id', '>', 14)->get();
        //dd($categories);
        //$childCategories = $categories->random(5);

        foreach ($categories as $cat) {
           // $cat->appendToNode($categories[0])->save();
        }
                
                
    
        
    }
}
