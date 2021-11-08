<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study__details', function (Blueprint $table) {
            $table->string('student_id');
            $table->string('consultant');
            $table->double('gpa', 3, 2);
            $table->double('cpa', 3, 2);
            $table->integer('point_training');
            $table->string('course');
            $table->primary('student_id');
            $table->foreign('student_id')->references('id')
                ->on('students')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('study__details');
    }
}
