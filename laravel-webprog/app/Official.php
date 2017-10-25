<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Official extends Model
{
	 protected $primaryKey = 'official_id';
	 protected $softDelete = true; 
     protected $fillable = ['fkofficial_province', 'official_first', 'official_middle', 'official_last'];
     
    public function fullName()
    {
        return $this->official_first.', '.$this->official_middle.' '.$this->official_last;
    }
}
