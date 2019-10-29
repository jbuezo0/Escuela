<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubjectYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_years', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('star_date')->nullable();
            $table->date('end_date')->nullable();
            $table->bigInteger('subject_id')->unsigned();
            $table->bigInteger('year_id')->unsigned();
            $table->bigInteger('teacher_id')->unsigned();
            $table->timestamps();

            $table-> foreign('subject_id')->references('id')->on('subjects');
            $table-> foreign('year_id')->references('id')->on('years');
            $table-> foreign('teacher_id')->references('id')->on('teachers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject_years');
    }
}
