<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'product_name' => $faker->word,
        'description' => $faker->sentence,
        'category_id' => factory(App\Category::class)->create()->id,
        //'image' => $faker->image('public/images',50,50),
        'image' => function(){        
        $im = imagecreatetruecolor(100, 100);        
        $bgColor = imagecolorallocate($im, rand(100, 255), rand(100, 255), rand(100, 255));
        imagefill($im, 0, 0, $bgColor);

        $iname = str_shuffle('asdhlehlahudluhweouhoyoazjhl12345').'.jpg';
        $imageName = 'public/images/'.$iname;
        $isGenerated = imagejpeg($im, $imageName);
        imagedestroy($im);

        return $iname;
        }

    ];
});
