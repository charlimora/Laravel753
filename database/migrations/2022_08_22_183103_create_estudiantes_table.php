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
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->id();
            $table->text('tipo_doc');
            $table->integer('num_doc');
            $table->string('document_iden');
            $table->date('fechaExpedi');
            //$table->unsignedBigInteger('id_pais_expedi'); //foránea
            //$table->unsignedBigInteger('id_departa_expedi'); //forénea
            $table->unsignedBigInteger('id_muni_expedi'); //forénea
            $table->text('nombres');
            $table->text('apellido1');
            $table->text('apellido2');
            $table->text('genero');
            $table->integer('estrato');
            $table->unsignedBigInteger('id_curso'); //forénea. Pregunta: puede ser null??
            //$table->unsignedBigInteger('id_pais_naci'); //forénea
            //$table->unsignedBigInteger('id_departa_naci'); //forénea
            $table->unsignedBigInteger('id_muni_naci'); //forénea
            $table->timestamps();

            //se crean las llaves foráneas
            //$table->foreign(['id_pais_expedi', 'id_pais_naci'])->references('id')->on('pais')->onDelete('cascade')->onUpdate('cascade');
            //$table->foreign(['id_departa_expedi', 'id_departa_naci'])->references('id')->on('departamentos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_muni_expedi')->references('id')->on('municipios');
            $table->foreign('id_muni_naci')->references('id')->on('municipios');
            $table->foreign('id_curso')->references('id')->on('cursos'); //pregunta: ¿Puede tener integridad referencial pese a ser null ??
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiantes');
    }
};
