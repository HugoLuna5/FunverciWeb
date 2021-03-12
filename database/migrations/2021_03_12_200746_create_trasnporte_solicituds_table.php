<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrasnporteSolicitudsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trasnporte_solicituds', function (Blueprint $table) {
            $table->id();
            $table->uuid('paciente')->nullable();
            $table->string('paciente_txt')->nullable();
            $table->uuid('acomp')->nullable();
            $table->string('acomp_txt')->nullable();
            $table->string('destino');
            $table->text('padecimiento');
            $table->dateTime('fecha_salida');
            $table->dateTime('fecha_regreso');
            $table->text('direccion');
            $table->string('asunto');
            $table->string('monto');
            $table->enum('empresa', ['ADO', 'ESTRELLA BLANCA']);
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
        Schema::dropIfExists('trasnporte_solicituds');
    }
}
