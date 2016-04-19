<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatientvisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientvisits', function (Blueprint $table) {
            $table->increments('id');
            $table->date('visit_date');
            $table->time('visit_time');
            $table->string('duration'); 
            $table->string('reason');
            $table->string('room_condition');
            $table->integer('room_id')->unsigned()->index();
            $table->integer('staff_id')->unsigned()->index();
            $table->integer('patient_id')->unsigned()->index();
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
        Schema::drop('patientvisits');
    }
}
