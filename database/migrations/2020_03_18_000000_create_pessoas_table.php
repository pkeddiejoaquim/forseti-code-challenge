<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')-> nullable(false);
            $table->timestamps();
            $table->smallInteger('status')-> nullable(false) ->default(0);
            $table->string('rg_ie')-> nullable(false) ->default('0');
            $table->enum('pessoa_tp', ['F', 'J']) -> default('F');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
    }
}
