<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');

            $table->string('email', 100)->unique();
            $table->string('senha');
            $table->string('nome_completo', 100);
            $table->string('cpf', 20)->unique()->nullable();
            $table->string('celular', 20)->nullable();
            $table->string('cidade', 30);
            $table->string('bairro_povoado', 30);
            $table->string('perfil', 10);
            

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
        Schema::dropIfExists('usuarios');
    }
}
