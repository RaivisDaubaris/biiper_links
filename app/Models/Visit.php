<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{

	protected $guarded = [];

	public function links()
	{
		return $this->hasMany(Link::class);
	}

	public function visits()
	{
		return $this->hasManyThrough(Visit::class, Link::class);
	}

}
