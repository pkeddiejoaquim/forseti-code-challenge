<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')-> nullable(false);
            $table->string('email')-> nullable(false) ->unique();
            $table->timestamps();
            $table->string('password');
            $table->rememberToken();
            $table->smallInteger('nivel')->nullable(false) ->default(0);
            $table->integer('id_gru')->nullable(false) ->default(0);
            $table->smallInteger('status')-> nullable(false) ->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
