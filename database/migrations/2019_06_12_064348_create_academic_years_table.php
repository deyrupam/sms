<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcademicYearsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_years', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ac_title');
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', [0,1])->default(0);
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
        Schema::dropIfExists('academic_years');
    }
}
