<?php

namespace App;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $fillable = [
		'title',
		'content'
	];

	public function setTitleAttribute($value) {
		$this->attributes['title'] = $value;
		$this->attributes['slug'] = Str::slug($value);
	}
}
