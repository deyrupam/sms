<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('attend_date');
            $table->enum('status', [0,1])->default(1);
            $table->bigInteger('student_id')->unsigned();
            $table->bigInteger('cls_id')->unsigned();
            $table->bigInteger('sec_id')->unsigned();

            $table->bigInteger('user_id')->unsigned()->nullable();
            $table->timestamps();


            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('cls_id')->references('id')->on('i_classes');
            $table->foreign('sec_id')->references('id')->on('sections');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendences');
    }
}
