<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFreelancerPropostaContratoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('freelancer_proposta_contrato', function (Blueprint $table) {
            $table->id();
            $table->foreignId('usuario_id');
            $table->date('date_registro');
            $table->string('localizacao');
            $table->string('descricao');
            $table->integer('trofeu');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('freelancer_proposta_contrato');
    }
}
