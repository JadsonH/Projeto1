<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnimesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->date('ano');
            $table->string('pais', 100 );
            $table->string('genero', 100 );
            $table->string('autor', 200);
            $table->string('faixa etaria');
            $table->string('sinopse', 100000);
            $table->string('critica', 1000000);


            $table->unsignedBigInteger('user_id')
            ->nullable();//permitir valor nulo

            $table->foreign('user_id')
                ->references('id')
                ->on('users');


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
        Schema::dropIfExists('animes');
    }
}
