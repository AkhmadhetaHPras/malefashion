<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class UserShowTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use WithoutMiddleware;

    public function test_user_show_success()
    {
        //login as user admin
        $user = User::find(1);
        $response = $this->actingAs($user)->withSession(['banned' => false])->get('/users/listall');

        //response if success login        
        $response->assertSeeText('User');
        $response->assertSeeText('Role');
        $response->assertSeeText('Username');
        $response->assertSeeText('Gender');

        //response status login
        $response->assertStatus(200);
    }
}
