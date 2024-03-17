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
        Schema::create('formulario_externos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('cedula');
            $table->string('telefono');
            $table->string('correo');
            $table->integer('numPersonas');
            $table->time('hora_inicio')->nullable()->default('00:00:00');
            $table->time('hora_final')->nullable()->default('00:00:00');
            $table->date('dia_inicial')->nullable()->default('2000-01-01');
            $table->date('dia_final')->nullable()->default('2000-01-01');
            $table->boolean('proyector')->default(false);
            $table->boolean('pizarra_inteligente')->default(false);
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
        Schema::dropIfExists('formulario_externos');
    }
};