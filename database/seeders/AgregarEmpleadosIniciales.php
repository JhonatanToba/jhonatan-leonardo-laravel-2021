<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AgregarEmpleadosIniciales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*$faker = Faker::create("es_ES");
        for ($i=0; $i < 100; $i++) { 
            DB::table("empleados")->insert([
                "created_at" => date("Y-m-d H:m:s"),
                "updated_at" => date("Y-m-d H:m:s"),
                "codigo" => $faker->randomNumber(99999,99999999),
                "nombre" => $faker->name(),
                "lugar_nacimiento" => $faker->city(),
                "fecha_nacimiento" => $faker-> dateTimeThisCentury(),
                "telefono" => $faker -> randomNumber(9999900000,999999999),
                "cargo" => $faker -> jobTitle(),
                "estado"=> $faker -> randomElement(["contratado","suspendido","prueba"]),
                "empresa_id" => $faker -> numberBetween(1,20)
            ]);
        }*/

        empleados::factory(10)->create();
        
    }
}
