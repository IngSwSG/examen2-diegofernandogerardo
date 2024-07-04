<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMaterialUnidadsTable extends Migration
{
    public function up()
    {
        Schema::create('material_unidads', function (Blueprint $table) {
            $table->id('idMaterialUnidad'); // Llave primaria
            $table->integer('cantidad');
            $table->unsignedBigInteger('idUnidad')->nullable(); // Llave foránea opcional
            $table->timestamps();

            // Definir la llave foránea
            $table->foreign('idUnidad')->references('idUnidad')->on('unidads')->onDelete('set null');
        });
    }

    public function down()
    {
        Schema::dropIfExists('material_unidads');
    }
}
