<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id');
            $table->enum('emp_type',[1,2])->default(1);
            $table->string('id_card',50)->unique();
            $table->string('name');
            $table->string('designation')->nullable();
            $table->string('qualification')->nullable();
            $table->string('dob',10);
            $table->enum('gender', [1,2])->default(1);
            $table->enum('religion', [1,2,3,4,5])->default(1);;
            $table->string('email',100)->nullable();
            $table->string('phone_no',15)->nullable();
            $table->string('address',500)->nullable();
            $table->string('joining_date',10);
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('employees');
    }
}
