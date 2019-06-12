<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('i_classes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('teacher_id');
            $table->string('name');
            $table->integer('numeric_value');
            $table->text('note')->nullable();
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
        Schema::dropIfExists('i_classes');
    }
}
