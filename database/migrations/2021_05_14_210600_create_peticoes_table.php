<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeticoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peticoes', function (Blueprint $table) {
            $table->id();
            $table->string('nome_arquivo')-> nullable(false);
            $table->integer('id_grup')->nullable(false) ->default(0);
            $table->enum('Areas', ['Civil', 'Ambiental','Penal','Empresarial Comercial','Tecnologia da Informação','Consumidor','Trabalhista','Tributario']) -> default('Civil');
            $table->timestamps();
            $table->smallInteger('status')-> nullable(false) ->default(0);
            $table->string('tipo')->nullable(false) ->default();
            $table->integer('tamanho')->nullable(false) ->default(0);
            $table->mediumtext('conteudo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peticoes');
    }
}
