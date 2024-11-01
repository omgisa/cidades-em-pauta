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
        Schema::create('alertas', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo', ['Alagamento', 'Acidente', 'Animal Silvestre', 'Animal Desaparecido', 'Buraco', 'Tiroteio', 'Vazamento de Bueiro']);
            $table->longText('observacoes')->nullable();
            $table->binary('arquivo')->nullable();
            $table->timestamps();

            $table->foreignId('endereco_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alertas');
    }
};
