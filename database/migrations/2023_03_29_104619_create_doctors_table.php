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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->integer('chamer_id');
            $table->integer('dept_id');
            $table->string('DoctorName');
            $table->string('DoctorQualification');
            $table->string('DoctorSpecialty');
            $table->string('languageSpoken');
            $table->string('Designation');
            $table->string('Institute');
            $table->string('chamber_time');
            $table->string('off_day');
            $table->string('floor_number');
            $table->string('Charge');
            $table->string('Room_number');
            $table->timestamps();
            $table->text('Image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
};
