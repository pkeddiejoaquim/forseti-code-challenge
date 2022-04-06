<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')-> nullable(false);
            $table->string('email')-> nullable(false) ->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->smallInteger('nivel')->nullable(false) ->default(0);
            $table->integer('id_grup')->nullable(false) ->default(0);
            $table->smallInteger('status')-> nullable(false) ->default(0);
            $table->string('rg_ie')-> nullable(false) ->default('0');
            $table->integer('cpf_cnpj')->nullable(false) ->default(0);
            $table->string('endereco')->default('');
            $table->string('cep')->nullable(false) ->default('0');
            $table->integer('esta_ibge')-> nullable(false) -> default(0);
            $table->integer('muni_ibge')-> nullable(false) -> default(0);
            $table->string('complemento')->default('');
            $table->string('bairro')->default('');
            $table->integer('id_fone')-> nullable(false) -> default(0);
            $table->string('site')->default('');
            $table->date('data_nasc')->default(now());	
            $table->enum('pessoa_tp', ['F', 'J']) -> default('F');
            $table->enum('fornecedor', ['TRUE', 'FALSE']) -> default('FALSE');
            $table->integer('id_fornece')-> nullable(false) -> default(0);
            $table->enum('vendedor', ['TRUE', 'FALSE']) -> default('FALSE');
            $table->integer('id_vende')-> nullable(false) -> default(0);
            $table->enum('funcionario', ['TRUE', 'FALSE']) -> default('FALSE');
            $table->integer('id_funciona')-> nullable(false) -> default(0);
            $table->enum('associado', ['TRUE', 'FALSE']) -> default('FALSE');
            $table->integer('id_associa')-> nullable(false) -> default(0);
            $table->string('contato')->default('');
            $table->longText('obs')->default('');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admins');
    }
}
