<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersTest extends TestCase
{
    use RefreshDatabase;
    /** @test **/
    public function a_user_can_have_pets()
    {
        $user = factory('App\User')->create();
        $user->pets()->create(['name' => 'Mochi']);
        $user->pets()->create(['name' => 'Harvey']);
        $this-> assertCount(2, $user->pets);
    }
}
