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
        DB::table('categories')->insert(
            [
                'name' => "Cùng ăn tối"
                            
            ]

        );
        DB::table('categories')->insert(
            [
                'name' => "Dự tiệc"
                            
            ]

        );
        DB::table('categories')->insert(
            [
                'name' => 'Thăm gia đình'
                             
            ]

        );
        DB::table('categories')->insert(
            [
                'name' => 'Đi du lịch'
                              
            ]

        );
    }
}
