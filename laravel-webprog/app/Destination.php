<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
	protected $primaryKey = 'destinations_id';
	protected $softDelete = true; 
	protected $fillable = ['fkdestination_barangays','dname', 'dlocation', 'ddesc'];
	
	public function barangay() {
		return $this->belongsTo('App\Barangay', 'fkdestination_barangays', 'barangays_id');
	}
}
