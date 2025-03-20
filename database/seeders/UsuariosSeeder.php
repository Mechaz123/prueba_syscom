<?php

namespace Database\Seeders;

use App\Models\Usuarios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = new Usuarios();

        $usuario->nombre = "Daniel Alejandro Rojas González";
        $usuario->correo_electronico = "danielalejandrorojasgonzalez@gmail.com";
        $usuario->id_rol = 1;
        $usuario->fecha_ingreso = "2025-03-01";
        $usuario->firma = "Daniel Alejandro Rojas González";
        $usuario->contrato = "Aún no hay contrato generado";
        $usuario->fecha_eliminacion = null;

        $usuario->save();
    }
}
