<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	protected $primaryKey = 'article_id';
	protected $softDelete = true; 
    protected $fillable = ['article_name','article_desc', 'fkarticle_municipalities'];

	public function municipality() {
		return $this->belongsTo('App\Municipality', 'fkarticle_municipalities', 'municipality_id');
	}
}
