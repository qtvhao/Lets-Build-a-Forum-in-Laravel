<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class Reply extends Model
{
	use DatabaseMigrations;
	public function owner() {
		return $this->belongsTo( User::class, 'user_id');
	}
    //
}
