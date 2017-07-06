<?php

use Illuminate\Database\Seeder;

class MunicipalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $municipality = new \App\Municipality([
        	'municipality' => 'Bacacay'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'municipality' => 'Camalig'
        ]);

        $municipality->save();


        $municipality = new \App\Municipality([
       		'municipality' => 'Daraga'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'municipality' => 'Guinobatan'
        ]);

        $municipality->save();

         $municipality = new \App\Municipality([
        	'municipality' => 'Jovellar'
        ]);

        $municipality->save();

         $municipality = new \App\Municipality([
        	'municipality' => 'Libon'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'municipality' => 'Malilipot'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'municipality' => 'Malinao'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'municipality' => 'Manito'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'municipality' => 'Oas'
        ]);

        $municipality->save();


        $municipality = new \App\Municipality([
        	'municipality' => 'Pio Duran'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'municipality' => 'Polangui'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'municipality' => 'Rapu-Rapu'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'municipality' => 'Rapu-Rapu'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'municipality' => 'Tiwi'
        ]);

        $municipality->save();
    }
}
