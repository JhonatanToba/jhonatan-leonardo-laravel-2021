<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->charset = "utf8mb4";
            $table->id();
            $table->timestamps();
            $table->integer("codigo")->unique();
            $table->string("nombre");
            $table->string("lugar_nacimiento");
            $table->boolean("casado");
            $table->date("fecha_nacimiento");
            $table->bigInteger("telefono")->nullable();
            $table->string("cargo");
            $table->enum("estado",["contratado","suspendido","prueba"])->default("prueba");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
