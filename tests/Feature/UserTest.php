<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    //https://laravel.com/docs/9.x/database-testing#resetting-the-database-after-each-test
    use RefreshDatabase;
    
    public function test_index_user(): void
    {
        $response = $this->get('/user');
        $response->assertStatus(200);
    }
    

    public function test_create_user(): void
    {
        /*
        $user = User::create([
            'name' => rand(),
            'email' => rand() . '.abc@xyz.com',
            'password' => 'password'
        ]);
        */

        $response = $this->post('/user/create', [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password'
        ]);

        $response->assertRedirect('/user');
    }
}
