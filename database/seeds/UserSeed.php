<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('users')->insert(
            [
                'name' => 'Hồ Thị Yêu',
                'username'=> "user",
                'password'=>Hash::make("1234"),
                'birth'=>'18/03/2000',
                'height'=> '1m55',
                'weight'=> '50kg',
                'addres'=>'Quang Tri',
                'phone'=>'0352215631',
                'image' => '/storage/public/yeu.jpg',
                'description'=>"Chi can la a"
            ]

        );
    }
}
