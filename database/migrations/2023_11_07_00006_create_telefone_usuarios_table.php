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
        Schema::create('telefone_usuarios', function (Blueprint $table) {
            $table->bigInteger('telefone')->nullable(false);

            //Chave estrangeira de usuarios
            $table->unsignedBigInteger('Usuarios_idUsuario');
            $table->foreign('Usuarios_idUsuario')->references('idUsuario')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telefone_usuarios');
    }
};
