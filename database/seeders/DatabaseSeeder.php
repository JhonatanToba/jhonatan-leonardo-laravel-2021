<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AgregarEmpresasIniciales;
use Database\Seeders\AgregarEmpleadosIniciales;
use Database\Seeders\AgregarEmpresasAdicionales;
use Database\Seeders\AgregarEmpleadosAdicionales;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this-> call(AgregarEmpresasIniciales::Class);
        $this-> call(AgregarEmpleadosIniciales::Class);
        $this-> call(AgregarEmpresasAdicionales::Class);
        $this-> call(AgregarEmpleadosAdicionales::Class);

    }
}
