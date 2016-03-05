<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('s_user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('uid',30);
            $table->string('s_name',20);
            $table->string('password',32);
            $table->integer('grade')->nullable();
            $table->string('department',30)->nullable();
            $table->string('major',30)->nullable();
            $table->string('sclass',40)->nullable();
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
        Schema::drop('s_user');
    }
}
