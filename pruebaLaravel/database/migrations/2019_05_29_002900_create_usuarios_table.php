<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nombre', 255);
            $table->char('email', 255);
         //   $table->timestamp('email_verified_at')->nullable();
            $table->char('password', 255);
           // $table->char('remember_token', 100);
            $table->enum('rol',['Cliente','Empleado','Gerente']);
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
