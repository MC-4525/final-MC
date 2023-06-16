<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relevamientos', function (Blueprint $table) {
            $table->id();
            $table->string('empleado');
            $table->string('sector');
            $table->string('direccionip');
            $table->string('email');
            $table->string('legajo');
            $table->string('telinterno');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('relevamientos');
    }
};
