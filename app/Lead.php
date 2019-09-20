<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
	public function setTitle($value)
	{
	    $this->attributes['title'] = $value;
	    $this->attributes['slug'] = str_slug($value);
	}
}
