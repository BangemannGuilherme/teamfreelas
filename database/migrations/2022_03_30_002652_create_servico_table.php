<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servico', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id');
            $table->string('descricao');
            $table->foreignId('habilidade_principal_id');
            $table->foreignId('tipo_pagamento_id');
            $table->decimal('valor_pagamento');
            $table->string('complexidade');
            $table->string('data_estimada');
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
        Schema::dropIfExists('servico');
    }
}
