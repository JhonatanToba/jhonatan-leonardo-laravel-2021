<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarEmpresasEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("empleados", function (Blueprint $table) {
            $table->unsignedBigInteger("empresa_id");
            $table->foreign("empresa_id")->references("id")->on("empresas");

            /*Otra forma de hacerlo es 
            $table->foreignId("empresa_id")->contrained("empresas")
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table("empleados", function (Blueprint $table) {
            $table->dropColumn("empresa_id");
            $table->dropForeign("empresas_id");
        });
    }
}
