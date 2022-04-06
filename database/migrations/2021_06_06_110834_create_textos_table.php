<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('textos', function (Blueprint $table) {
            $table->id();
            $table->string('nm_arquivo')->default('');
            $table->integer('id_gru')-> nullable(false) -> default(0);
            $table->string('descricao')->default('');
            $table->timestamps();
            $table->smallInteger('status')->nullable(false) ->default(0);
            $table->integer('tamanho')->nullable(false) ->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('textos');
    }
}
