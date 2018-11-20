<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',60);
            $table->string('email',150)->unique();
            $table->string('password');
            $table->string('img')->nullable();
            $table->string('phone');
            $table->boolean('personal')->default(0);
            $table->boolean('company')->default(0);
            $table->boolean('admin')->default(0);
            $table->string('status')->default('bekleme');
            $table->string('remember_token', 100)->nullable();
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
        Schema::dropIfExists('users');
    }
}
