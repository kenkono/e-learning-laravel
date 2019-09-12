<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAnswersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   

        Schema::table('userTakenCourses', function (Blueprint $table) {
            $table->increments('id')->first();
        });

        Schema::create('user_answers', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->unsignedInteger('taken_course_id');
            $table->unsignedInteger('choice_id');
            $table->unsignedInteger('question_id');
            $table->foreign('taken_course_id')->references('id')->on('userTakenCourses')->onDelete('cascade');
            $table->foreign('choice_id')->references('id')->on('choices')->onDelete('cascade');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   
        Schema::dropIfExists('user_answers');

        Schema::table('userTakenCourses', function (Blueprint $table) {
            $table->dropColumn('id');
        });
    }
}
