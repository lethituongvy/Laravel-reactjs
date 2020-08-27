<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\DB;

class LoveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        DB::table('love')->insert(
            [
                'name' => 'Hồ Thị Yêu',
                'ages'=> 20,
                'address'=>"Quảng Trị",
                'facebook'=>'hồ thịyêu',
                'job'=>'Sinh viên năm 2',
                'image' => '/storage/public/yeu.jpg',
                'height'=> '1m55',
                'weight'=> '50kg',
                'price'=>30000000,
                'description'=>"Chỉ cần ai đó tới cứu với trái tim 20 năm trống rỗng của tôi",
                'category_id' => $faker->numberBetween(1, 4)
            ]

        );
        DB::table('love')->insert(
            [
                'name' => 'Nguyễn Thị Tiên',
                'ages'=> 20,
                'address'=>"Đà Nẵng",
                'facebook'=>'nguyễn thị tiên',
                'job'=>'Sinh viên năm 2',
                'image' => '/storage/public/tien.jpg',
                'height'=> '1m58',
                'weight'=> '50kg',
                'price'=>30000000,
                'description'=>"Chỉ cần một người luôn bên tôi không cần giàu sang",
                'category_id' => $faker->numberBetween(1, 4)
            ]

        );
        DB::table('love')->insert(
            [
                'name' => 'Hồ Thị Mai',
                'ages'=> 20,
                'address'=>"Quảng Trị",
                'facebook'=>'mai any',
                'job'=>'Sinh viên năm 2',
                'image' => '/storage/public/mai.jpg',
                'height'=> '1m57',
                'weight'=> '54kg',
                'price'=>30000000,
                'description'=>"Khi nào bạn Yêu có người yêu rồi hãy đến tìm tôi",
                'category_id' => $faker->numberBetween(1, 4)
            ]

        );
        DB::table('love')->insert(
            [
                'name' => 'Hồ Thị On',
                'ages'=> 21,
                'address'=>"Quảng Trị",
                'facebook'=>'Ngã rẽ đời tôi',
                'job'=>'Sinh viên năm 2',
                'image' => '/storage/public/on.jpg',
                'height'=> '1m55',
                'weight'=> '52kg',
                'price'=>30000000,
                'description'=>"mlem mlem chỉ cần vui thôi",
                'category_id' => $faker->numberBetween(1, 4)
            ]

        );
        DB::table('love')->insert(
            [
                'name' => 'Nguyễn Thị Hoàng Hương',
                'ages'=> 20,
                'address'=>"Quảng Nam",
                'facebook'=>'nguyen thi hoang huong',
                'job'=>'Sinh viên năm 2',
                'image' => '/storage/public/huong.jpg',
                'height'=> '1m55',
                'weight'=> '49kg',
                'price'=>30000000,
                'description'=>"Chỉ cần người nhìn lại thì tôi sẽ luôn ở bên",
                'category_id' => $faker->numberBetween(1, 4)
            ]

        );
        DB::table('love')->insert(
            [
                'name' => 'Hoàng Thị Dịu',
                'ages'=> 20,
                'address'=>"Quảng Bình",
                'facebook'=>'hoàng dịu',
                'job'=>'Sinh viên năm 2',
                'image' => '/storage/public/diu.jpg',
                'height'=> '1m55',
                'weight'=> '50kg',
                'price'=>30000000,
                'description'=>"Chỉ cần nòi giống tốt",
                'category_id' => $faker->numberBetween(1, 4)
            ]

        );
        DB::table('love')->insert(
            [
                'name' => 'Mai Thị Mỹ Vân',
                'ages'=> 20,
                'address'=>"Bình Định",
                'facebook'=>'Mỹ Vân',
                'job'=>'Sinh viên năm 2',
                'image' => '/storage/public/van.jpg',
                'height'=> '1m55',
                'weight'=> '40kg',
                'price'=>30000000,
                'description'=>"Đẹp trai là được hết",
                'category_id' => $faker->numberBetween(1, 4)
            ]

        );
    }
}
