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
        Schema::create('avaliacaos', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo', ['Asfalto', 'Bloquete', 'Sem Pavimento']);
            $table->enum('nivel', ['Muito Bom', 'Bom', 'Ok', 'Ruim', 'Muito Ruim']);
            $table->longText('observacoes')->nullable();
            $table->timestamps();

            $table->foreignId('endereco_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avaliacaos');
    }
};
