<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('Fecha');
            $table->string('Hora')->nullable();
            $table->string('Tipo', 45);
            $table->float('precio')->nullable();
            $table->boolean('confirmado')->default(0);
            $table->unsignedBigInteger('clientes_id')->nullable();
            $table->foreign('clientes_id')->references('id')->on('clientes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->unsignedBigInteger('quien_contrato')->nullable();
            $table->foreign('quien_contrato')->references('id')->on('users')
                            ->onDelete('cascade')
                            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventos');
    }
}