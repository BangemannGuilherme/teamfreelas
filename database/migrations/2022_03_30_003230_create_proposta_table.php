<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropostaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proposta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('servico_id');
            $table->foreignId('freelancer_id');
            $table->date('data_proposta');
            $table->foreignId('tipo_pagamento_id');
            $table->decimal('valor_pagamento');
            $table->foreignId('status_proposta_id');
            $table->text('comentario_cliente')->nullable();
            $table->text('comentario_freelancer')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proposta');
    }
}
