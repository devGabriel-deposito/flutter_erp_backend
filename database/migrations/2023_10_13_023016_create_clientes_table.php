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
            $table->text('nome');
            $table->string('sexo');
            $table->date('nascimento');
            $table->string('estado_civil');
            $table->string('nacionalidade');
            $table->text('rg');
            $table->text('cpf');
            $table->text('cep');
            $table->text('estado');
            $table->text('cidade');
            $table->text('rua');
            $table->text('numero');
            $table->text('logradouro');
            $table->text('apto');
            $table->text('bairro');
            $table->text('telefone')->nullable();
            $table->text('celular');
            $table->text('email');
            $table->double('renda_mensal');
            $table->text('fonte_de_renda');
            $table->string('tipo_de_imovel')->nullable();
            $table->text('localizacao_desejada')->nullable();
            $table->double('faixa_de_preco');
            $table->integer('quartos')->default(0);
            $table->integer('banheiros')->default(0);
            $table->boolean('piscina')->default(false);
            $table->boolean('garagem')->default(false);
            $table->boolean('jardim')->default(false);
            $table->boolean('area_de_lazer')->default(false);
            $table->string('copia_do_rg');
            $table->string('copia_do_cpf');
            $table->string('comprovante_de_renda');
            $table->text('observacoes')->nullable();
            $table->string('status');
            $table->date('ultima_interacao')->nullable();
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
