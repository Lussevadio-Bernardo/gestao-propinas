<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('estudante', function (Blueprint $table) {
            $table->id('id_estudante');
            $table->string('classe');
            $table->integer('num_processo');
            $table->date('data_matricula');
            $table->timestamps();
            $table->unsignedBigInteger('id_funcionario');
            $table->unsignedBigInteger('id_curso');
            $table->foreign('id_funcionario')->references('id_funcionario')->on('funcionarios')->onDelete('cascade');
            $table->foreign('id_curso')->references('id_curso')->on('curso')->onDelete('cascade');    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudante');
    }
};
