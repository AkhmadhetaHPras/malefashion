<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserDeleteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_delete_successfull()
    {
        $response = $this->withoutMiddleware()->delete('/user/10');

        $response->assertStatus(200);
    }
}
