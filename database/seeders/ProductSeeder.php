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
      DB::table('products')->insert([
        [
            'name' => 'Washing machine',
            'price' => '30990',
            'description' => 'LG 7.0 KGs 5 Star Inverter Fully-Automatic Front Loading Washing Machine',
            'category' => 'Home Applinaces',
            'gallery' => 'https://www.lg.com/in/images/washing-machines/md07540887/FHM1408BDL-Washing-Machines-Front-View-350-v1.jpg'          

        ],
        [
            'name' => 'LG NanoCell',
            'price' => '99990',
            'description' => 'LG NANO83 55 (139cm) 4K NanoCell TV',
            'category' => 'LED Tv',
            'gallery' => 'https://www.lg.com/in/images/tvs/md07533053/gallery/55NANO83TPZ-D-01-v1.jpg'          

        ],
        [
            'name' => 'Refrigerator',
            'price' => '25999',
            'description' => '242 Ltr, 3 Star, Smart Inverter Compressor, DoorCooling+™, Smart Diagnosis™, Shiny Steel Finish, Frost-Free Double Door Refrigerator',
            'category' => 'Home Applinaces',
            'gallery' => 'https://www.lg.com/in/images/refrigerators/md07524765/gallery/GL-I292RPZX-Refrigerators-Front-View-D-01.jpg'          

        ],
        [
            'name' => 'Water Purifiers',
            'price' => '30199',
            'description' => 'LG 8 litres RO+UV+UF Water Purifier, WW184EPB with Stainless Steel Tank , 2-in-1 Water Solution',
            'category' => 'Home Applinaces',
            'gallery' => 'https://www.lg.com/in/images/water-purifiers/md07528358/gallery/WW184EPB-Water-purifiers-Front-View-D-01.jpg'          

        ],
        [
            'name' => 'Air Conditioners',
            'price' =>'48989',
            'description' => 'AI+ Convertible 6-in-1, 5 Star(1.5) Split AC with ThinQ (Wi-Fi)',
            'category' => 'Home Applinaces',
            'gallery' => 'https://www.lg.com/in/images/split-ac/md07565646/gallery/RS-Q19MWZE-Split-ac-Front-view-D-01.jpg'          

        ],
    
    ]);
    }
}