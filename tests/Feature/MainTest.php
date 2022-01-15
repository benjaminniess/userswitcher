<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MainTest extends TestCase
{
    use RefreshDatabase;

    public function test_user_is_redirected_to_hp_when_providing_a_correct_email(): void
    {
        $user = User::factory()->create();
        $response = $this->get('switchto/' . $user->email);

        $response->assertStatus(302);
        $response->assertRedirect('/');
    }

    public function test_an_error_occurs_if_email_does_not_exist(): void
    {
        $response = $this->get('switchto/wrong@email.test');

        $response->assertStatus(500);
    }

    public function test_user_is_redirected_to_hp_when_providing_a_correct_id(): void
    {
        $user = User::factory()->create();
        $response = $this->get('switchto/' . $user->id);

        $response->assertStatus(302);
        $response->assertRedirect('/');
    }

    public function test_an_error_occurs_if_id_does_not_exist(): void
    {
        $response = $this->get('switchto/1234');

        $response->assertStatus(500);
    }

    public function test_user_is_authenticated_after_redirection()
    {
        $user = User::factory()->create();
        $this->get('switchto/' . $user->id);

        $this->assertAuthenticatedAs($user);
    }
}
