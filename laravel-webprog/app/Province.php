<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
     protected $softDelete = true; 
     protected $primaryKey = 'provinces_id';
     protected $fillable = ['province', 'capital'];
}
