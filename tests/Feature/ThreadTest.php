<?php

namespace Tests\Feature;

use App\Reply;
use App\Thread;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * @property Thread thread
 */
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
		$response = $this->get( '/threads/' . $this->thread->id );
		$response->assertSee( $this->thread->title );
	}

	/**
	 * @test
	 */
	public function a_user_can_read_replies_that_are_associated_with_a_thread() {
		$reply = factory( Reply::class )->create( [ 'thread_id' => $this->thread->getKey() ] );
		$this->get( '/threads/' . $this->thread->getKey())->assertSee($reply->body);
	}

	protected function setUp() {
		parent::setUp(); // TODO: Change the autogenerated stub
		$this->thread   = factory( Thread::class )->create();
	}
}
