<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('products')->insert([
            [
            'name'=>'LG mobile',
            'price'=>'300',
            'description'=>'A smartphone with 4gb',
            'category'=>'mobile', 
            'gallery'=>'https://www.lg.com/id/images/plp-b2c/id-mobile-hcategoryselector-1.jpg'            
            ],
            [
            'name'=>'noxia mobile',
            'price'=>'100',
            'description'=>'A smartphone with 4gb',
            'category'=>'mobile', 
            'gallery'=>'https://www.lg.com/id/images/plp-b2c/id-mobile-hcategoryselector-1.jpg'            
            ],
            [
            'name'=>'laptop mobile',
            'price'=>'100',
            'description'=>'A smartphone with 4gb',
            'category'=>'mobile', 
            'gallery'=>'https://www.lg.com/id/images/plp-b2c/id-mobile-hcategoryselector-1.jpg'            
            ],
            [
            'name'=>'ucup mobile',
            'price'=>'100',
            'description'=>'A smartphone with 4gb',
            'category'=>'mobile', 
            'gallery'=>'https://www.lg.com/id/images/plp-b2c/id-mobile-hcategoryselector-1.jpg'            
            ],
           
        ]);
    }
}
