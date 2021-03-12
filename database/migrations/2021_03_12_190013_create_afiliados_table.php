<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAfiliadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('afiliados', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid');
            $table->string('folio', 45);
            $table->enum('drechohabiencia', ['IMMS', 'PARTICULAR', 'CENTRO DE SALUD', 'ISSSTE', 'NINGUNA']);
            $table->text('foto');
            $table->string('nombre', 60);
            $table->string('apellido_p', 60);
            $table->string('apellido_m', 60);
            $table->string('tipo_sangre', 10);
            $table->string('curp', 60);
            $table->enum('sexo', ['MASCULINO', 'FEMENINO']);
            $table->integer('edad');
            $table->text('ine');
            $table->text('clave');
            $table->text('calle');
            $table->text('colonia');
            $table->text('municipio');
            $table->text('entidad');
            $table->string('telefono',14);
            $table->string('ocupacion',80);
            $table->enum('escolaridad',['PRIMARIA', 'SECUNDARIA', 'PREPARATORIA', 'UNIVERSIDAD', 'NINGUNA' ]);
            $table->enum('leer_escribir',['SI', 'NO' ]);
            $table->enum('estado_civil',['SOLTERO', 'CASADO', 'DIVORCIADO', 'OTRO' ]);
            $table->string('estado_civil_otro',40)->nullable();
            $table->text('padecimientos');
            $table->enum('arboles', ['SI', 'NO']);
            $table->integer('hijos_mas_dieciocho');
            $table->integer('hijos_menos_dieciocho');
            $table->enum('dialecto', ['SI', 'NO']);
            $table->string('dialecto_esp',40)->nullable();
            $table->text('tipo_cultivo')->nullable();
            $table->enum('agua', ['SI', 'NO'])->nullable();
            $table->enum('luz', ['SI', 'NO'])->nullable();
            $table->enum('drenaje', ['SI', 'NO'])->nullable();
            $table->enum('telefono_val', ['SI', 'NO'])->nullable();
            $table->enum('internet', ['SI', 'NO'])->nullable();
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
        Schema::dropIfExists('afiliados');
    }
}
