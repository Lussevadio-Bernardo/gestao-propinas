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
        //
        Schema::create('pagamento', function (Blueprint $table) {
            $table->id('id_pagamento');
           $table->string('data_pagamento');
           $table->integer('ano_electivo');
           $table->timestamps();
           $table->unsignedBigInteger('id_funcionario');
           $table->unsignedBigInteger('id_propinas');
           $table->unsignedBigInteger('id_mes');
           $table->foreign('id_funcionario')->references('id_funcionario')->on('funcionarios')->onDelete('cascade');
           $table->foreign('id_propinas')->references('id_propinas')->on('propinas')->onDelete('cascade');
           $table->foreign('id_mes')->references('id_mes')->on('mes')->onDelete('cascade');
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pagamento');
    }
};
