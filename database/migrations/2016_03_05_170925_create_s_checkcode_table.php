<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSCheckcodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_checkcode', function (Blueprint $table) {
            $table->increments('id');
            $table->string('login_ip',15)->nullable();
            $table->text('cookie')->nullable();
            $table->tinyInteger('status');
            $table->integer('create_at');
            $table->integer('update_at')->default(-28800);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('s_checkcode');
    }
}
