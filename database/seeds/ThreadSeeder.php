<?php

use Illuminate\Database\Seeder;

class ThreadSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		factory( \App\Thread::class, 50 )->create();
	}
}
