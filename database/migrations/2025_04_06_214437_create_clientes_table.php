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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 80);
            $table->string('cep', 10)->nullable();
            $table->string('endereco', 100)->nullable();  // Changed from 'logradouro' to match form field
            $table->string('uf', 2)->nullable();
            $table->string('numero', 15)->nullable();
            $table->string('complemento', 100)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->string('celular', 20)->nullable();
            $table->enum('sexo', ['M', 'F'])->nullable();  // Changed to enum for better data consistency
            $table->date('nascimento')->nullable();  // Removed unnecessary length parameter
            $table->string('cpf', 15)->nullable();
            $table->string('email', 100)->nullable();  // Increased email length for longer addresses
            $table->text('observacao')->nullable();  // Removed special character 'ç'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
