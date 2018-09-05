<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listUser = array(
            [
                'name' => 'Admin',
                'email' => 'quanghavan96@gmail.com',
                'phone' => '01638161533',
                'level' => 1, 
                'password' => bcrypt('123321'),
                'remember_token' => str_random(10),
                'address_id' => 37, 
            ],
            [
                'name' => 'Nguyễn Văn Mạnh',
                'email' => 'havanquang120796@gmail.com',
                'phone' => '01638161533',
                'level' => 0, 
                'password' => bcrypt('123321'),
                'remember_token' => str_random(10),
                'address_id' => 36, 
            ],
            [
                'name' => 'Đinh Khắc Doanh',
                'email' => 'ha.van.quang@framgia.com',
                'phone' => '01623462563',
                'level' => 0, 
                'password' => bcrypt('123321'),
                'remember_token' => str_random(10),
                'address_id' => 37, 
            ],
            [
                'name' => 'Phạm Công Định',
                'email' => '20143578@student.hust.edu.vn',
                'phone' => '01638321489',
                'level' => 0, 
                'password' => bcrypt('123321'),
                'remember_token' => str_random(10),
                'address_id' => 35, 
            ],
        );
        foreach ($listUser as $key => $value) {
            DB::table('users')->insert($value);
        }
    }
}
