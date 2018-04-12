<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**  @test  */
    function it_shows_the_users_list()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('Jhon')
            ->assertSee('Edison');
    }

    function it_shows_a_default_message_if_there_are_not_users()
    {
        $this->get('/usuarios?empty')
            ->assertStatus(200)
            ->assertSee('No hay usuarios registrados');
    }

    function it_loads_the_users_details_page()
    {
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Mostrando detalle del usuario: 5');
    }

    function it_loads_the_new_users_page() 
    {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee("Crear nuevo usuario");
    }
}
