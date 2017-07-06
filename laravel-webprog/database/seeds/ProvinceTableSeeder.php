<?php

use Illuminate\Database\Seeder;

class ProvinceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $province = new \App\Province([
        	'province' => 'Albay',
        	'capital' => 'Legazpi'
        ]);

        $province->save();

        $province = new \App\Province([
        	'province' => 'Camarines Norte',
        	'capital' => 'Daet'
        ]);
        $province->save();

        $province = new \App\Province([
        	'province' => 'Camarines Sur',
        	'capital' => 'Pili'
        ]);
        $province->save();

         $province = new \App\Province([
    	'province' => 'Catanduanes',
    	'capital' => 'Legazpi'
        ]);
        $province->save();

         $province = new \App\Province([
    	'province' => 'Masbate',
    	'capital' => 'Masbate'
        ]);
        $province->save();

         $province = new \App\Province([
    	'province' => 'Sorsogon',
    	'capital' => 'Sorsogon'
        ]);
        $province->save();
    }
}
