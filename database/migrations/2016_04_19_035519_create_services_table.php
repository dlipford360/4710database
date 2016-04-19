<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->text('service_type');
            $table->float('service_cost');

            $table->timestamps();
        });
        Schema::create('patientvisit_service', function (Blueprint $table) {

            $table->integer('patientvisit_id')->unsigned()->index();
            $table->foreign('patientvisit_id')->references('id')->on('patientvisits')->onDelete('cascade');

            $table->integer('service_id')->unsigned()->index();
            $table->foreign('service_id')->references('id')->on('services')->onDelete('cascade');


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
        Schema::drop('services');
        Schema::drop('patientvisit_service');
    }
}
