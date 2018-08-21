<?php

namespace Tests\Feature;

use App\Thread;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ThreadTest extends TestCase {
	/** @test */
	public function test_a_user_can_view_all_threads() {
		$response = $this->get( '/threads' );
		$response->assertStatus( 200 );
	}

	/**
	 * @test
	 */
	public function test_a_user_can_read_a_single_thread() {
		/** @var Thread $thread */
		$thread   = factory( Thread::class )->create();
		$response = $this->get( '/threads/' . $thread->id );
		$response->assertSee( $thread->title );
	}
}
