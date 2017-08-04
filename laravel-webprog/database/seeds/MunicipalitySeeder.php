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
//2
        $municipality = new \App\Municipality([
        	'fkmunicipality_provinces' => "2",
        	'municipality' => 'Basud'
        ]);

        $municipality->save();


        $municipality = new \App\Municipality([
            'fkmunicipality_provinces' => "2",
            'municipality' => 'Capalonga'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
            'fkmunicipality_provinces' => "2",
            'municipality' => 'Daet'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
            'fkmunicipality_provinces' => "2",
            'municipality' => 'Tiwi'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
            'fkmunicipality_provinces' => "2",
            'municipality' => 'Jose Panganiban'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
            'fkmunicipality_provinces' => "2",
            'municipality' => 'Labo'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
            'fkmunicipality_provinces' => "2",
            'municipality' => 'Mercedes'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
            'fkmunicipality_provinces' => "2",
            'municipality' => 'Paracale'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
            'fkmunicipality_provinces' => "2",
            'municipality' => 'San Lorenzo Ruiz'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
            'fkmunicipality_provinces' => "2",
            'municipality' => 'San Vicente'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
            'fkmunicipality_provinces' => "2",
            'municipality' => 'Santa Elena'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
            'fkmunicipality_provinces' => "2",
            'municipality' => 'Talisay'
        ]);

        $municipality->save();

        $municipality = new \App\Municipality([
            'fkmunicipality_provinces' => "2",
            'municipality' => 'Vinzons'
        ]);

        $municipality->save();

    }
}
