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
            $table->string('regi_no',20)->unique();
            $table->integer('student_id')->unsigned()->index();
            $table->integer('class_id')->unsigned()->index();
            $table->integer('section_id')->unsigned()->index();
            $table->integer('academic_year_id')->unsigned()->index();
            $table->string('roll_no',20)->nullable();
            $table->string('group',15)->nullable();
            $table->string('shift',15)->nullable();
            $table->string('card_no',50)->nullable();
            $table->string('board_regi_no',50)->nullable();
            $table->unsignedInteger('fourth_subject')->default(0);
            $table->enum('status', [0,1])->default(1);
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
        Schema::dropIfExists('registrations');
    }
}
