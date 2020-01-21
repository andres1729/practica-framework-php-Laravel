<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ClientesModulesTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     * @test
     */
     function it_shoes_the_users_list()
    {
      factory(Cliente::class)->create([
        'Nombre'->'Hilbert',
      ]);
      factory(Cliente::class)->create([
        'Nombre'->'Galois',
      ]);


    }
     function it_loads_the_users_list_page()
    {


        $response = $this->get('/');

        $response->assertStatus(200)
                 ->assertSee('Home');
    }

    /**
     * @test
     */
     function it_loads_the_users_details_page()
     {
       $response = $this->get('/usuarios');

       $response->assertStatus(500)
                ->assertSee("Usuarios ")
                ->assertSee('Grothendieck')
                ->assertSee('Hilbert');
     }

     function it_loads_the_new_users_page()
     {
       $response = $this->get('/usuarios/nuevo');

       $response->assertStatus(200)
                ->assertSee("Crear nuevo usuario");
     }

}
