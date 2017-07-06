<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
		protected $primaryKey = 'barangays_id';
	  protected $softDelete = true; 
     protected $fillable = ['barangay_name', 'barangay_name'];
}
