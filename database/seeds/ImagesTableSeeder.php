<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listImage = array(
        	[
        		'product_id' => 1,
        		'image_link' => 'cdsc-iphone-x-256gb-h2-400x460-400x460.png'
        	],
        	[
        		'product_id' => 1,
        		'image_link' => 'qmR0-iphone-x-64gb-silver-400x460.png'
        	],
        	[
        		'product_id' => 1,
        		'image_link' => '4gvR-iphone-8-red-1-400x460.png'
        	],
        	[
        		'product_id' => 2,
        		'image_link' => 'EKBx-iphone-6-32gb-vang-400-400x460.png'
        	],
        	[
        		'product_id' => 2,
        		'image_link' => 'kAp9-iphone-8-64gb-1-400x460-1-400x460.png'
        	],
        	[
        		'product_id' => 2,
        		'image_link' => '8C6I-iphone-x-64gb-silver-400x460.png'
        	],
        	[
        		'product_id' => 3,
        		'image_link' => 'ucdS-vivo-v7-plus-1-400x460.png'
        	],
        	[
        		'product_id' => 3,
        		'image_link' => 'lREs-samsung-galaxy-j7-plus-2-400x460.png'
        	],
        	[
        		'product_id' => 4,
        		'image_link' => 'tUXr-samsung-galaxy-j8-400x460.png'
        	],
        	[
        		'product_id' => 4,
        		'image_link' => '75Ko-vivo-v7-plus-1-400x460.png'
        	],
        	[
        		'product_id' => 5,
        		'image_link' => 'y2B6-iphone-x-256gb-h2-400x460-400x460.png'
        	],
        	[
        		'product_id' => 5,
        		'image_link' => 'AGEk-iphone-6-32gb-vang-400-400x460.png'
        	],
        	[
        		'product_id' => 6,
        		'image_link' => 'bf2c-iphone-8-plus-64gb-h1-400x460.png'
        	],
        	[
        		'product_id' => 6,
        		'image_link' => 'hllE-iphone-8-64gb-1-400x460-1-400x460.png'
        	]
        );
        foreach ($listImage as $key => $value) {
       		DB::table('images')->insert($value);
       	}
    }
}
