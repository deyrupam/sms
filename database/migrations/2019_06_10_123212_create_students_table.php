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
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('dob',10);
            $table->enum('gender', [1,2])->default(1);
            $table->string('religion')->nullable();
            $table->string('blood_group',10)->nullable();
            $table->string('nationality',50)->nullable();
            $table->string('photo')->nullable();
            $table->string('email',100)->nullable();
            $table->string('phone_no')->nullable();

            $table->string('note',500)->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_phone_no',15)->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_phone_no',15)->nullable();
            $table->string('guardian')->nullable();
            $table->string('guardian_phone_no',15)->nullable();
            $table->string('present_address',500)->nullable();
            $table->string('permanent_address',500);
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
        Schema::dropIfExists('students');
    }
}
