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
        Schema::create('materiais_estoque', function (Blueprint $table) {
            $table->id('idMateriais');
            $table->unsignedBigInteger('Estoque_idEstoque');
            $table->foreign('Estoque_idEstoque')->references('idEstoque')->on('estoque')->onDelete('cascade')->onUpdate('cascade');
            $table->decimal('kg', 5,2)->nullable(false);
            $table->string('nomeM', 50)->nullable(false);
            $table->decimal('metros', 38,4)->nullable();
            $table->integer('quantidade')->nullable(false);
            $table->date('dtVencimento',)->nullable();
            $table->date('dtEntrada',)->nullable(false);
            $table->date('dtSaida',)->nullable();
            $table->enum('Status_2',['usado', 'novo'])->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materiais_estoque');
    }
};
