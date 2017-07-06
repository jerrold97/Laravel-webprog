<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
	  protected $softDelete = true; 
     protected $fillable = ['dname', 'dlocation', 'ddesc'];
}
