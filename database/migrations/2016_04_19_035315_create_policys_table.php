<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePolicysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policys', function (Blueprint $table) {
            $table->increments('policys_id');
            $table->string('company'); 
            $table->string('policy_type');
            $table->float('medical_copay');
            $table->float('lab_copay');
            $table->float('pharmacy_copay');
            $table->integer('patients_id')->unsigned();
            $table->foreign('patients_id')->references('patients_id')->on->('patients')->onDelete('cascade'); 
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
        Schema::drop('policys');
    }
}
