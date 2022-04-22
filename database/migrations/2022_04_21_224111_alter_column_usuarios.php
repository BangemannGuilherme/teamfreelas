<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AlterColumnUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement('ALTER TABLE usuarios RENAME COLUMN usuario TO username');
        DB::statement('ALTER TABLE usuarios RENAME COLUMN senha TO password');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('ALTER TABLE usuarios RENAME COLUMN username TO usuario');
        DB::statement('ALTER TABLE usuarios RENAME COLUMN password TO senha');
    }
}
