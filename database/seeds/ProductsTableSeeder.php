<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$descript = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam erat mi, rutrum at sollicitudin rhoncus, ultricies posuere erat. Duis convallis, arcu nec aliquam consequat, purus felis vehicula felis, a dapibus enim lorem nec augue.</p>';
        $listProduct = array(
        	[
        		'category_id' => 2,
        		'name' => 'Điện thoại iPhone 8 Plus 64GB',
        		'descript' => '<p>Thừa hưởng thiết kế đ&atilde; đạt đến độ chuẩn mực, thế hệ&nbsp;<a href="https://www.thegioididong.com/dtdd/iphone-8-plus" target="_blank">iPhone 8 Plus</a>&nbsp;thay đổi phong c&aacute;ch b&oacute;ng bẩy hơn v&agrave; bổ sung h&agrave;ng loạt t&iacute;nh năng cao cấp cho trải nghiệm sử dụng v&ocirc; c&ugrave;ng tuyệt vời.</p>',
        		'price' => 23990000,
        		'discount' => 1350000,
        		'avatar' => '97Lr-iphone-8-plus-64gb-h1-400x460.png',
        	],
        	[
        		'category_id' => 3,
        		'name' => 'Điện thoại iPhone X 64GB Gray',
        		'descript' => $descript,
        		'price' => 2212000,
        		'discount' => 110000,
        		'avatar' => 'NQY7-iphone-x-64gb-1-400x460.png',
        	],
        	[
        		'category_id' => 3,
        		'name' => 'Điện thoại iPhone X 64GB Silver',
        		'descript' => $descript,
        		'price' => 8990000,
        		'discount' => 1350000,
        		'avatar' => '67uG-iphone-x-64gb-silver-400x460.png',
        	],
        	[
        		'category_id' => 4,
        		'name' => 'Điện thoại iPhone 8 Plus 256GB',
        		'descript' => '<p>Thừa hưởng thiết kế đ&atilde; đạt đến độ chuẩn mực, thế hệ&nbsp;<a href="https://www.thegioididong.com/dtdd/iphone-8-plus" target="_blank">iPhone 8 Plus</a>&nbsp;thay đổi phong c&aacute;ch b&oacute;ng bẩy hơn v&agrave; bổ sung h&agrave;ng loạt t&iacute;nh năng cao cấp cho trải nghiệm sử dụng v&ocirc; c&ugrave;ng tuyệt vời.</p>',
        		'price' => 6299000,
        		'discount' => 1000000,
        		'avatar' => 'jHd1-iphone-8-64gb-1-400x460-1-400x460.png',
        	],
        	[
        		'category_id' => 5,
        		'name' => 'Điện thoại Xiaomi Redmi 6A',
        		'descript' => $descript,
        		'price' => 17990000,
        		'discount' => 1350000,
        		'avatar' => 'b1lk-oppo-f7-bac-400x460.png',
        	],
        	[
        		'category_id' => 6,
        		'name' => 'Điện thoại Oppo',
        		'descript' => $descript,
        		'price' => 11990000,
        		'discount' => 1350000,
        		'avatar' => 'dvnu-iphone-8-64gb-1-400x460-1-400x460.png',
        	]
        );
        foreach ($listProduct as $key => $value) {
       		DB::table('products')->insert($value);
       	}
    }
}
