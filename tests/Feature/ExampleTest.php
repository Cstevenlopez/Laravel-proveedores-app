<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
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
        $response = $this->delete('/api/proveedores/2');

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'proveedor Eliminado exitosamente',
            ]);
    }
    public function test_update()
    {
        $response = $this->put('/api/proveedores/3', ['nombres' => 'juan','apellidos' => 'Reyes','direccion' => 'libertad','ciudad' => 'Rosita','numero_cedula' => '165136Q','numero_telefono' => '56138318','terminos_pagos' => 'robo']);

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'proveedor actualizado exitosamente',
            ]);
    }
}
