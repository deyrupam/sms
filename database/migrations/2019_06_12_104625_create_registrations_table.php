<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reg_no',20)->unique();
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('class_id')->unsigned();
            $table->bigInteger('section_id')->unsigned();
            $table->bigInteger('academic_year_id')->unsigned();
            $table->string('roll_no',20)->nullable();
            $table->string('group',15)->nullable();
            $table->string('shift',15)->nullable();
            $table->string('card_no',50)->nullable();
            $table->string('board_regi_no',50)->nullable();
            $table->unsignedInteger('fourth_subject')->default(0);
            $table->enum('status', [0,1])->default(1);
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('class_id')->references('id')->on('i_classes');
            $table->foreign('section_id')->references('id')->on('sections');
            $table->foreign('academic_year_id')->references('id')->on('academic_years');






        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}
