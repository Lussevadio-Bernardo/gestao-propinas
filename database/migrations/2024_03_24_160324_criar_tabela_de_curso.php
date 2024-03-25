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
        Schema::create('curso', function (Blueprint $table) {
            $table->id('id_curso');
            $table->string('nome');
            $table->string('area');
            $table->timestamps();
            $table->unsignedBigInteger('id_funcionario');
            $table->foreign('id_funcionario')->references('id_funcionario')->on('funcionarios')->onDelete('cascade');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('curso');
    }
};
