<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AgregarEmpresasIniciales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create("es_ES");
        for ($i=0; $i < 20 ; $i++) { 
            DB::table("empresas")->insert([
                "nombre" => $faker->company,
                "created_at" => date("Y-m-d H:m:s"),
                "updated_at" => date("Y-m-d H:m:s"),
                "nit"    => $faker->numberBetween(999,999999)
            ]);
        }
    }
}
