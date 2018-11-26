<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('age');
            $table->string('school')->nullable();
            $table->string('class')->nullable();
            $table->string('image')->nullable();
            $table->date('dayOfBirth')->nullable();
            $table->string('gender')->nullable();
            $table->string('nameOfDad')->nullable();
            $table->string('nameOfMom')->nullable();
            $table->string('address')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->text('description')->nullable();
            $table->string('nationality')->nullable();
            $table->string('email');
            $table->string('hobbies')->nullable();
            $table->string('favouriteSubject')->nullable();
            $table->string('favouriteSong')->nullable();
            $table->string('favouriteDish')->nullable();
            $table->string('idol')->nullable();
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
        Schema::dropIfExists('students');
    }
}
