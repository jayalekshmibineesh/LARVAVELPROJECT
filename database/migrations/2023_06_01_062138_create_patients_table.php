<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigincrements('patient_id');
            $table->string('patient_name');
            $table->string('department');
            $table->string('doctor_name');
            $table->date('date');
            $table->time('time');
            $table->string('email');
            $table->string('place');
            $table->biginteger('contact');
            $table->string('gender');
            $table->integer('age');
            $table->integer('staff_id');
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
        Schema::dropIfExists('patients');
    }
};
