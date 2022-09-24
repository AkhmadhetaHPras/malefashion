<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserCreateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_create_filled_all()
    {
        $admin = User::find(1);
        $response = $this->withoutMiddleware()->post('/user', [
            'role' => 'Customer',
            'username' => 'salsabela',
            'email' => 'noviandar@gmail.com',
            'password' => 'salsabela123',
            'name' => 'salsabela laa',
            'telp' => '081267852772',
            'gender' => 'Female',
            'birth' => '01-01-2001',
            'photo' => 'img/profile/default.png',
            'street_address' => '11C Imam Bonjol Street',
            'postal_code' => '66183',
            'city' => 'Blitar',
            'province' => 'East Java',
        ]);

        $response->assertValid(['Add user successfully!']);
        $response->assertStatus(302);
    }

    public function test_user_create_required()
    {
        $userBlank = [
            'role' => '',
            'username' => '',
            'email' => '',
            'password' => '',
            'name' => '',
            'telp' => '',
            'gender' => '',
            'birth' => '',
            'photo' => '',
            'street_address' => '',
            'postal_code' => '',
            'city' => '',
            'province' => '',
        ];

        $response = $this->withoutMiddleware()->post('/user', $userBlank);

        $response->assertInvalid([
            'role' => 'The role field is required.',
            'username' => 'The username field is required.',
            'email' => 'The email field is required.',
            'passwd' => 'The passwd field is required.',
            'fullname' => 'The fullname field is required.',
            'contact' => 'The contact field is required.',
            'gender' => 'The gender field is required.',
            'birth' => 'The birth field is required.',
            'street' => 'The street field is required.',
            'post_code' => 'The post code field is required.',
            'city' => 'The city field is required.',
            'province' => 'The province field is required.',
        ]);

        $response->assertStatus(302);
    }
}
