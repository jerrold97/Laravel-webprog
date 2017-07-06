<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipality extends Model
{
		protected $primaryKey = 'municipality_id';
	  protected $softDelete = true; 
     protected $fillable = ['municipality'];
}
