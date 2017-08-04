<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $primaryKey = 'event_id';
	protected $softDelete = true; 
    protected $fillable = ['event_name','event_desc', 'fkevent_municipality'];
}
