<?php

use App\Reply;
use Illuminate\Database\Seeder;

class ThreadSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory( \App\Thread::class, 50 )->create()->each(function(\App\Thread $thread) {
			$reply = factory( Reply::class )->create();
			$thread->replies()->save( $reply );
		});
	}
}
