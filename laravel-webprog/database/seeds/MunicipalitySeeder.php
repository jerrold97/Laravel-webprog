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
        	'fkmunicipality_provinces' => "1",
        	'municipality' => 'Bacacay'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'fkmunicipality_provinces' => "1",
        	'municipality' => 'Camalig'
        ]);

        $municipality->save();


        $municipality = new \App\Municipality([
        	'fkmunicipality_provinces' => "1",
       		'municipality' => 'Daraga'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'fkmunicipality_provinces' => "1",
        	'municipality' => 'Guinobatan'
        ]);

        $municipality->save();

         $municipality = new \App\Municipality([
         	'fkmunicipality_provinces' => "1",
        	'municipality' => 'Jovellar'
        ]);

        $municipality->save();

         $municipality = new \App\Municipality([
			'fkmunicipality_provinces' => "1",
        	'municipality' => 'Libon'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'fkmunicipality_provinces' => "1",
        	'municipality' => 'Malilipot'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'fkmunicipality_provinces' => "1",
        	'municipality' => 'Malinao'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'fkmunicipality_provinces' => "1",
        	'municipality' => 'Manito'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'fkmunicipality_provinces' => "1",
        	'municipality' => 'Oas'
        ]);

        $municipality->save();


        $municipality = new \App\Municipality([
        	'fkmunicipality_provinces' => "1",
        	'municipality' => 'Pio Duran'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'fkmunicipality_provinces' => "1",
        	'municipality' => 'Polangui'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'fkmunicipality_provinces' => "1",
        	'municipality' => 'Rapu-Rapu'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'fkmunicipality_provinces' => "1",
        	'municipality' => 'Rapu-Rapu'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
        	'fkmunicipality_provinces' => "1",
        	'municipality' => 'Tiwi'
        ]);

        $municipality->save();
    }
}
