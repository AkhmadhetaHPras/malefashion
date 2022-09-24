<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserUpdateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_user_edit_show()
    {
        //login as user admin
        $user = User::find(1);
        $response = $this->actingAs($user)->withSession(['banned' => false])->get('user/10 ');

        //response if success login                
        $response->assertSeeText('Role');
        $response->assertSeeText('Username');
        $response->assertSeeText('Gender');
        $response->assertSeeText('Email');
        $response->assertSeeText('Name');
        $response->assertSeeText('Contact');
        $response->assertSeeText('Photo');
        $response->assertSeeText('Birth');

        //response status login
        $response->assertStatus(200);
    }

    public function test_user_update_success()
    {
        $response = $this->withoutMiddleware()->post('users/edit/10 ', [
            'role' => 'Customer',
            'username' => 'salsabela aaaa',
            'email' => 'noviandar@gmail.com',
            'password' => 'salsabela123',
            'name' => 'salsabela laa',
            'telp' => '081267852772',
            'gender' => 'Female',
            'birth' => '01-01-2001',
            'photo' => 'img/profile/default.png',
        ]);

        $response->assertValid(['Add user successfully!']);
        $response->assertStatus(302);
    }
}
