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
            $table->increments('patientvisits_id');
            $table->date('visit_date');
            $table->time('visit_time');
            $table->string('duration'); 
            $table->string('reason');
            $table->string('room_condition');
            $table->interger('room_id')->unsigned();
            //TABLE "ROOMS" DOES NOT EXIST!!!
            $table->foreign('rooms_id')->references('rooms_id')->in('rooms')-onDelete('cascade'); 
            $table->integer('staffs_id')->unsigned(); 
            $table-foreign('staffs_id')->references('staffs_id')->in('staffs')->onDelete('cascade');
            $table->integer('patients_id')->unsigned(); 
            $table->foreign('patients_id')->references('patients_is')->in('patients')->onDelete('cascade');
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
