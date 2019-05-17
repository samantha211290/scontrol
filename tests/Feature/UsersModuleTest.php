<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{
    /** @test */
    function loads_the_users_list()
    {
        $response = $this->get('/usuarios');
        $response->assertStatus(200);
        $response->assertSee('Usuarios');
    }
    
      /** @test */
    function loads_the_users_list_parameter()
    {
        $response = $this->get('/usuarios/5');
        $response->assertStatus(200);
        $response->assertSee('Mostrando detalle usuario:5');
    }
}
