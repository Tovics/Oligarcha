<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDebtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('debts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('payee_user_id')->unsigned();
            $table->foreign('payee_user_id')
                        ->references('id')
                        ->on('users')
                        ->onDelete('cascade');
            $table->integer('payer_user_id')->unsigned();
            $table->foreign('payer_user_id')
                        ->references('id')
                        ->on('users')
                        ->onDelete('cascade');
            $table->string('title');
            $table->string('description');
            $table->integer('amount');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('debts');
    }
}
