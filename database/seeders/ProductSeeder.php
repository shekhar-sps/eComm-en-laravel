<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert(
       [
            'name'=>'LG',
            'price'=>'100000',
            'description'=>'Lg Refrgerator',
            'gallery'=>'https://images-na.ssl-images-amazon.com/images/I/51B%2BPLv%2BsvL._SL1500_.jpg',
            'category'=>'Refrigerator'
        ]);

    }
}
