<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadsTable extends Migration
{
    public function up()
    {
        Schema::create('unidads', function (Blueprint $table) {
            $table->id('idUnidad'); // Llave primaria
            $table->string('nombre');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('unidads');
    }
}
