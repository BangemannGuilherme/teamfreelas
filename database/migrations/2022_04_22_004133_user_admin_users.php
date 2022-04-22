<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UserAdminUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $password = Hash::make('admin');
        $date = date("Y-m-d");
        $datetime = Carbon::now();
        DB::statement("INSERT INTO users(username, password, nome, sobrenome, email, data_nascimento, created_at, updated_at, deleted_at, remember_token, admin, status) VALUES('admin', '$password', 'Admin', 'Tf', 'admin@teamfreelas.com', '$date', '$datetime', '$datetime', null, true, true, true)");
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
