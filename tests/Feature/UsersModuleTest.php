<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UsersModuleTest extends TestCase
{

	/**  @test  */
	function it_loads_the_users_list_page()
	{
		$this->get('/usuarios')
		->assertStatus(200)
		->assertSee('Listado de usuarios')
		->assertSee('Andres')
		->assertSee('Susana')
		;
	}
	/**  @test  */
	function it_loads_the_users_details_page()
	{
		$this->get('/usuarios/5')
		->assertStatus(200)
		->assertSee('Detalles del usuario: 5');
	}
	/**  @test  */
	function it_loads_the_new_users_page()
	{
		$this->get('/usuarios/add')
		->assertStatus(200)
		->assertSee('Agregar nuevo usuario');
	}
	/**  @test  */
	function it_loads_the_edit_users_page()
	{
		$this->get('/usuarios/5/edit')
		->assertStatus(200)
		->assertSee('Editar usuario 5');
	}

}
