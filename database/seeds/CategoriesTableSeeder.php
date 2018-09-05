<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listCategory = array(
        	[
	            'name' => 'Iphone',
	            'parent_id' => 0, 
        	],
        	[
	            'name' => 'Iphone 8',
	            'parent_id' => 1, 
        	],
        	[
	            'name' => 'Iphone X',
	            'parent_id' => 1, 
        	],
        	[
	            'name' => 'Samsung',
	            'parent_id' => 0, 
        	],
        	[
	            'name' => 'Samsung Galaxy',
	            'parent_id' => 4, 
        	],
        	[
	            'name' => 'Xiaomi',
	            'parent_id' => 0, 
        	],
        	[
	            'name' => 'Nokia',
	            'parent_id' => 0, 
        	],
        ); 
       	foreach ($listCategory as $key => $value) {
       		DB::table('categories')->insert($value);
       	}
    }
}
