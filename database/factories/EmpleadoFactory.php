<?php

namespace Database\Factories;

use App\Models\empresa;
use App\Models\empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class empleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
                "created_at" => date("Y-m-d H:m:s"),
                "updated_at" => date("Y-m-d H:m:s"),
                "codigo" => $this->faker->randomNumber(9,99999999),
                "nombre" => $this->faker->name(),
                "lugar_nacimiento" => $this->faker->city(),
                "fecha_nacimiento" => $this->faker-> dateTimeThisCentury(),
                "telefono" => $this->faker -> randomNumber(1,999999999),
                "cargo" => $this->faker -> jobTitle(),
                "estado"=> $this->faker -> randomElement(["contratado","suspendido","prueba"]),
                "empresa_id" => $this->faker->numberBetween(1,empresa::count())
        ];
    }
}
