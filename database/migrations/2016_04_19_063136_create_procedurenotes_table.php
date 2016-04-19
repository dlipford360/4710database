<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcedurenotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedurenotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('procedure_id')->unsigned()->index();
            $table->text('procedure_result');
            $table->timestamps();
        });
        Schema::create('patientvisit_procedurenote', function (Blueprint $table) {

        $table->integer('patientvisit_id')->unsigned()->index();
        $table->foreign('patientvisit_id')->references('id')->on('patientvisits')->onDelete('cascade');

        $table->integer('procedurenote_id')->unsigned()->index();
        $table->foreign('procedurenote_id')->references('id')->on('procedurenotes')->onDelete('cascade');


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
        Schema::drop('procedurenotes');
    }
}
