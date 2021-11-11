<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;



class ExampleTest extends TestCase
{
    use WithoutMiddleware;
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
   public function test_delete()
    {
        $response = $this->delete('/api/proveedores/52');

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'proveedor Eliminado exitosamente',
            ]);
    }
    public function test_update()
    {
        $response = $this->put('/api/proveedores/43', ['nombres' => 'paco','apellidos' => 'Reyes','direccion' => 'libertad','ciudad' => 'Rosita','numero_cedula' => '165136Q','numero_telefono' => '56138318','terminos_pagos' => 'robo']);

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'proveedor actualizado exitosamente',
            ]);
    }
    public function test_store()
    {
        $response = $this->post('/api/proveedores', ['nombres' => 'anier','apellidos' => 'Antonio','direccion' => 'mierda','ciudad' => 'Rosita','numero_cedula' => '165136Q','numero_telefono' => '56138318','terminos_pagos' => 'robo']);

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'Proveedor guardado exitosamente',
            ]);
    }
   public function test_index()
    {
        $response = $this->get('/api/proveedores');

        $response
            ->assertStatus(200)
            ->assertJson([
                
            ]);
    }
}
