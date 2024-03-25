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
        Schema::create('propinas', function (Blueprint $table) {
             $table->id('id_propinas');
            $table->string('classe');
            $table->float('valor');
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
        Schema::dropIfExists('propinas');
    }
};
