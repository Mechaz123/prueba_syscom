<?php

namespace Database\Seeders;

use App\Models\Roles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rolesEmpleado = new Roles();
        $rolesEmpleado->nombre_cargo = "Empleado";
        $rolesEmpleado->save();

        $rolesJefe = new Roles();
        $rolesJefe->nombre_cargo = "Jefe";
        $rolesJefe->save();
    }
}
