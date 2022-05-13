<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavoritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favoritos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('produto_id')->unsigned();
            $table->integer('cliente_id')->unsigned();

            $table->foreign("produto_id")
                ->references("id")
                ->on("produtos");

            $table->foreign("cliente_id")
                ->references("id")
                ->on("clientes");

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
        Schema::dropIfExists('favoritos');
    }
}
