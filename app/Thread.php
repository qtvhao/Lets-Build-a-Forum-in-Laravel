<?php

namespace App;

class Thread extends Model {
	/**
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function replies() {
		return $this->hasMany( Reply::class );
	}
	//
}
