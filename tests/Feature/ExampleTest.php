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
/*    public function test_delete()
    {
        $response = $this->delete('/api/proveedores/7');

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'proveedor Eliminado exitosamente',
            ]);
    }
    public function test_update()
    {
        $response = $this->put('/api/proveedores/3', ['nombres' => 'mario','apellidos' => 'Reyes','direccion' => 'libertad','ciudad' => 'Rosita','numero_cedula' => '165136Q','numero_telefono' => '56138318','terminos_pagos' => 'robo']);

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'proveedor actualizado exitosamente',
            ]);
    }
    public function test_store()
    {
        $response = $this->post('/api/proveedores', ['nombres' => 'tony','apellidos' => 'pito','direccion' => 'mierda','ciudad' => 'Rosita','numero_cedula' => '165136Q','numero_telefono' => '56138318','terminos_pagos' => 'robo']);

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
    }*/
 /* public function test_delete()
    {
        $response = $this->delete('/api/proveedores/10');

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'proveedor Eliminado exitosamente',
            ]);
    }*/
/*  public function test_update()
    {
        $response = $this->put('/api/proveedores/3', ['nombres' => 'mario','apellidos' => 'Reyes','direccion' => 'libertad','ciudad' => 'Rosita','numero_cedula' => '165136Q','numero_telefono' => '56138318','terminos_pagos' => 'robo']);

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'proveedor actualizado exitosamente',
            ]);
    }*/
    public function test_store()
    {
        $response = $this->postJson('/api/proveedores', ['nombres' => 'tony','apellidos' => 'pito','direccion' => 'mierda','ciudad' => 'Rosita','numero_cedula' => '165136Q','numero_telefono' => '56138318','terminos_pagos' => 'robo']);

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje' => 'Proveedor guardado exitosamente',
            ]);
    }
  /*  public function test_index()
    {
        $response = $this->get('/api/proveedores');

        $response
            ->assertStatus(200)
            ->assertJson([
                
            ]);
    }*/
}
