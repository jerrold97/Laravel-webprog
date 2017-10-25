<?php

use Illuminate\Database\Seeder;

class BarangayTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//Albay - Bacacay
        $barangay = new \App\Barangay([
        	'fkbarangays_municipalities' => "1",
        	'barangay_name' => 'Baclayon',
        	'barangay_desc' => 'Barangay Baclayon'
        ]);

        $barangay->save();

        $barangay = new \App\barangay([
        	'fkbarangays_municipalities' => "1",
        	'barangay_name' => 'Banao',
        	'barangay_desc' => 'Barangay Banao'
        ]);
        $barangay->save();

        $barangay = new \App\barangay([
        	'fkbarangays_municipalities' => "1",
        	'barangay_name' => 'Barangay 1',
        	'barangay_desc' => 'Barangay 1'
        ]);
        $barangay->save();

         $barangay = new \App\barangay([
         	'fkbarangays_municipalities' => "1",
    	'barangay_name' => 'Barangay 2',
    	'barangay_desc' => 'Barangay 2'
        ]);
        $barangay->save();

         $barangay = new \App\barangay([
         	'fkbarangays_municipalities' => "1",
    	'barangay_name' => 'Barangay 3',
    	'barangay_desc' => 'Barangay 3'
        ]);
        $barangay->save();

         $barangay = new \App\barangay([
         	'fkbarangays_municipalities' => "1",
    	'barangay_name' => 'Barangay 4',
    	'barangay_desc' => 'Barangay 4'
        ]);
        $barangay->save();


//Albay - Camalig
        $barangay = new \App\Barangay([
        	'fkbarangays_municipalities' => "2",
        	'barangay_name' => 'Anoling',
        	'barangay_desc' => 'Barangay Anoling'
        ]);

        $barangay->save();

        $barangay = new \App\barangay([
        	'fkbarangays_municipalities' => "2",
        	'barangay_name' => 'Baligang',
        	'barangay_desc' => 'Barangay Baligang'
        ]);
        $barangay->save();

        $barangay = new \App\barangay([
        	'fkbarangays_municipalities' => "2",
        	'barangay_name' => 'Bantonan',
        	'barangay_desc' => 'Barangay Bantonan'
        ]);
        $barangay->save();

         $barangay = new \App\barangay([
         	'fkbarangays_municipalities' => "2",
    	'barangay_name' => 'Barangay 1',
    	'barangay_desc' => 'Barangay 1'
        ]);
        $barangay->save();

         $barangay = new \App\barangay([
         	'fkbarangays_municipalities' => "2",
    	'barangay_name' => 'Barangay 2',
    	'barangay_desc' => 'Barangay 2'
        ]);
        $barangay->save();

         $barangay = new \App\barangay([
         	'fkbarangays_municipalities' => "2",
    	'barangay_name' => 'Barangay 3',
    	'barangay_desc' => 'Barangay 4'
        ]);
        $barangay->save();
    }
}
