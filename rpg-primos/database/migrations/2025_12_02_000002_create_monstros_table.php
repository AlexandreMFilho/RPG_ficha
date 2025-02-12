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
        Schema::create('monstros', function (Blueprint $table) {
            $table->id(); // ID único do monstro
            $table->foreignId('criatura_id')->constrained('criaturas')->onDelete('cascade'); // Relacionamento com a tabela 'criaturas'
            // Dados específicos do monstro, como habilidades, ataques, resistências
            $table->string('habilidade_especial');
            $table->integer('forca');
            $table->integer('resistencia');
            $table->json('ataques');
            $table->timestamp('last_used_at')->nullable();
            $table->timestamp('expires_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monstros');
    }
};
