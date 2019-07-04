<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PetsTest extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    public function guests_may_not_create_pets()
    {
        $this->post('/pets')->assertRedirect('/login');
    }

    /** @test **/
    public function a_user_can_create_a_pet()
    {
        $this->actingAs(factory('App\User')->create());
        $attributes = ['name' => 'Nuni'];
        $this->post('/pets', $attributes);
        $this->assertDatabaseHas('pets', $attributes);
    }
}
