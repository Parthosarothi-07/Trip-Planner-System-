<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('products')->insert([
            [
                'name'=>'Hotel Amber',
                "price"=>"400 per night",
                "description"=>"hotel and resort",
                "category"=>"4star",
                "gallery"=>"https://images.pexels.com/photos/161758/governor-s-mansion-montgomery-alabama-grand-staircase-161758.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                'name'=>'Luxor Inn',
                "price"=>"399 per night",
                "description"=>"hotel and resort",
                "category"=>"4star",
                "gallery"=>"https://images.pexels.com/photos/7908079/pexels-photo-7908079.jpeg?cs=srgb&dl=pexels-domenico-m-7908079.jpg&fm=jpg"
            ],
            [
                'name'=>'Kings Inn',
                "price"=>"299",
                "description"=>"hotel and resort",
                "category"=>"3star",
                "gallery"=>"https://images.pexels.com/photos/5739355/pexels-photo-5739355.jpeg?cs=srgb&dl=pexels-dids-5739355.jpg&fm=jpg"
            ],
            [
                'name'=>'Lake View Hotel',
                "price"=>"399 per night",
                "description"=>"hotel and resort",
                "category"=>"4star",
                "gallery"=>"https://images.pexels.com/photos/205342/pexels-photo-205342.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                'name'=>'Paramount Hotel',
                "price"=>"500 per night",
                "description"=>"hotel and resort",
                "category"=>"5star",
                "gallery"=>"https://images.pexels.com/photos/189296/pexels-photo-189296.jpeg?cs=srgb&dl=pexels-donald-tong-189296.jpg&fm=jpg"
            ],
            [
                'name'=>'Tempala Palace',
                "price"=>"500 per night",
                "description"=>"hotel and resort",
                "category"=>"5star",
                "gallery"=>"https://images.pexels.com/photos/261102/pexels-photo-261102.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                'name'=>'Hotel Velum',
                "price"=>"399 per night",
                "description"=>"hotel and resort",
                "category"=>"4star",
                "gallery"=>"https://images.pexels.com/photos/6758532/pexels-photo-6758532.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            ],
            [
                'name'=>'Illuminate State Resort',
                "price"=>"500 per night",
                "description"=>"hotel and resort",
                "category"=>"5star",
                "gallery"=>"https://images.pexels.com/photos/1001965/pexels-photo-1001965.jpeg?cs=srgb&dl=pexels-iv%C3%A1n-rivero-1001965.jpg&fm=jpg"
            ]
        ]);
    }
}
