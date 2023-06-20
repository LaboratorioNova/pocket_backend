<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class EmailVerifyTest extends TestCase
{
    use DatabaseTransactions;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testVerifyUserEmail()
    {
        $login = $this
            ->withHeader("accepts", "application/json")
            ->post(env("APP_URL").'api/auth/sign-in', ["email" => "juda_alector@hotmail.com", "password" => "una_facil"]);

        $token = $login->original->token;

        $newUser = [
            'name' => "Juan Alberto",
            'last_name_father' => "De Villas",
            'last_name_mother' => "Cruz",
            'phone_number' => "4774667655",
            'email' => "judaalector@hotmail.xom",
            'password' => bcrypt("una_facil"),
            'role_id' => 1
        ];

        $response = $this
            ->withHeader("accepts", "application/json")
            ->withHeader("Authorization", "Bearer " . $token)
            ->post(env("APP_URL").'api/users/create', $newUser);

    
        $response->assertStatus(200);
    }
}
