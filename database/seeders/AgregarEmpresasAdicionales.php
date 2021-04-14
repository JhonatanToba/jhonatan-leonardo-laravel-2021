<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\empresa;

class AgregarEmpresasAdicionales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         empresa::factory(10)->create();

         //se puede hacer uso de un count("numero de veces") para que se genere el numero de datos que se desee
    }
}
