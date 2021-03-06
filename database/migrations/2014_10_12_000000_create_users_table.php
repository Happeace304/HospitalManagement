<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->string('name');
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            $table->string('id_card_number')->unique()->nullable();
            $table->string('medical_card_number')->unique()->nullable();
            $table->enum('department', ['CARDIOLOGY', 'DERMATOLOGY', "DIETETICS"])->nullable();
            $table->string('gender')->default(0);
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->timestamp('birthday')->nullable();
            $table->boolean("active")->default(1);
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
