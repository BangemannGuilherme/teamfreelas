<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddDeleteCascadeTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('servico', function (Blueprint $table) {
            // $table->dropColumn('cliente_id');
            $table->foreignId('cliente_id')
                    ->references('id')->on('cliente')
                    ->onDelete('cascade')->after('id');
        });

        Schema::table('cliente', function (Blueprint $table) {
            // $table->dropColumn('user_id');
            $table->foreignId('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade')->after('id');
        });

        Schema::table('freelancer', function (Blueprint $table) {
            // $table->dropColumn('user_id');
            $table->foreignId('user_id')
                    ->references('id')->on('users')
                    ->onDelete('cascade')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
