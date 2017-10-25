<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barangay extends Model
{
	protected $primaryKey = 'barangays_id';
	protected $softDelete = true; 
	protected $fillable = ['fkbarangays_municipalities', 'barangay_name', 'barangay_desc'];
	
	public function municipality() {
		return $this->belongsTo('App\Municipality', 'fkbarangays_municipalities', 'municipality_id');
	}

}
