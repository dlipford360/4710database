<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDrugscriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drugscripts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('drug_id')->unsigned()->index();
            $table->integer('num_refills');
            $table->integer('qty');
            $table->text('instructions');

            $table->timestamps();
        });
        Schema::create('drugscript_patientvisit', function (Blueprint $table) {

            $table->integer('patientvisit_id')->unsigned()->index();
            $table->foreign('patientvisit_id')->references('id')->on('patientvisits')->onDelete('cascade');

            $table->integer('drugscript_id')->unsigned()->index();
            $table->foreign('drugscript_id')->references('id')->on('drugscripts')->onDelete('cascade');


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
        Schema::drop('drugscript_patientvisit');

        Schema::drop('drugscripts');
    }
}
