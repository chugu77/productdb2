<?php

use Illuminate\Database\Seeder;
use App\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = factory(App\Product::class, 25)->create();
        $categories = Category::where('id', '>', 19)->get();
        //dd($categories);
        //$childCategories = $categories->random(5);

        foreach ($categories as $cat) {
            $cat->appendToNode(Category::first())->save();
        }
        
    }
}
