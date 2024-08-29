<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'โอวัลติน','cost'=>'50','price'=>'100','qty'=> '20','image_url'=>'https://th.bing.com/th/id/OIP.deu3Vzf2bEhBOOqiyItu9AHaHa?rs=1&pid=ImgDetMain','product_type_id'=>'9'],
            ['name' => 'เลย์ คลาสสิค','cost'=>'20','price'=>'30','qty'=> '50','image_url'=>'https://sentosakhonkaen.com/wp-content/uploads/2021/07/S_0021_8850718809011.jpg','product_type_id'=>'8'],
           
            ];
            DB::table('products')->insert($data);
    }
}
