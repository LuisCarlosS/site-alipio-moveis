<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nome', 150);
            $table->string('foto1', 30);
            $table->string('foto2', 30)->nullable();
            $table->string('foto3', 30)->nullable();
            $table->string('foto4', 30)->nullable();
            $table->string('foto5', 30)->nullable();
            $table->string('foto6', 30)->nullable();
            $table->string('codigo', 30)->unique();
            $table->text('descricao', 400);
            $table->string('marca', 30);
            $table->string('status', 10);
            $table->date('dt_postagem');

            $table->integer('tipo_produto_id')->unsigned();

            $table->foreign("tipo_produto_id")
                ->references("id")
                ->on("tipo_produtos");
            

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
        Schema::dropIfExists('produtos');
    }
}
