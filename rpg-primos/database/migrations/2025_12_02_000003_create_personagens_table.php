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
        Schema::create('personagens', function (Blueprint $table) {
            $table->id(); // ID único da valquiria
            $table->foreignId('criatura_id')->constrained('criaturas')->onDelete('cascade'); // Relacionamento com a tabela 'criaturas'
            $table->string('raca');
            $table->string('classe');
            $table->string('armadura');
            $table->string('arma_1');
            $table->string('arma_2');
            $table->string('ataque');
            $table->text('equipamento');
            $table->text('mochila');
            $table->text('partes_de_freya');
            $table->text('tesouros_de_odin');
            $table->text('historia');
            $table->text('observacoes');
            $table->json('personagens'); // Podem ser personagens relacionados
            $table->integer('mana');
            $table->text('itens');
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
        Schema::dropIfExists('personagens');
    }
};
