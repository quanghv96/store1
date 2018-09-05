<?php

use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listSlide = array(
        	[
	            'name' => str_random(4),
	            'image_link' => 'Vdon-slider-03.png', 
        	],
        	[
	            'name' => str_random(4),
	            'image_link' => 'vmBA-XS68-slider-02.png', 
        	],
        	[
	            'name' => str_random(4),
	            'image_link' => 'Z688-slider-01.png', 
        	]
        ); 
       	foreach ($listSlide as $key => $value) {
       		DB::table('slides')->insert($value);
       	}
    }
}
