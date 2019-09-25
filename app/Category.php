<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = "cms_categories";

	public function setName($value)
	{
	    $this->attributes['name'] = $value;
	    $this->attributes['slug'] = str_slug($value);
	}
}
