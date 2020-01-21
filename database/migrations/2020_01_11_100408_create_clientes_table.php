<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->Integer('profession_id')->unsigned();
            $table->foreign('profession_id')->references('id')->on('professions');
            $table->string('Nombre');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('is_admin')->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {/*
      Schema::table('clientes', function (Blueprint $table) {
          //
        $table->dropForeign([ 'profession_id']);
         $table->dropColumn('prefession_id');
      }); */
    }

}
