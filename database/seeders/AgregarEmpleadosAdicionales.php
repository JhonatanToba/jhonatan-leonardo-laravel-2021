<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\empleado;

class AgregarEmpleadosAdicionales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        empleado::factory()->count(10)->create();
    }
}
