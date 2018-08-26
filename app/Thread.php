<?php

namespace App;

class Thread extends Model {
	public function replies() {
		return $this->hasMany( Reply::class );
	}
	//
}
