<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('sliders')->insert([
        [
            'slider' => 'https://www.lg.com/in/images/Banner/Assurance-Insurance-Category-Banner-1600x600-1-1.jpg'          

        ],
        [
            'slider' => 'https://www.lg.com/in/images/Banner/Microwave-Banner-1600x600-v.jpg'          

        ],
        [
            'slider' => 'https://www.lg.com/in/images/plp-b2c/banner-2022/Ref-Banner_Catagory_D.jpg'          

        ],
               
    ]);
 
    }
}