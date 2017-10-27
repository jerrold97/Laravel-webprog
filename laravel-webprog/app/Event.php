<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $primaryKey = 'event_id';
	protected $softDelete = true; 
    protected $fillable = ['event_name','event_desc', 'fkevent_municipality'];

	public function municipality() {
		return $this->belongsTo('App\Municipality', 'fkevent_municipality', 'municipality_id');
	}
}
