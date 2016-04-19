<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiagnosisnotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosisnotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('diagnosis_id')->unsigned()->index();
            $table->text('date_of_onset');
            $table->text('symptoms');
            $table->text('severity');
            $table->text('prognosis');
            $table->integer('patientvisit_id')->unsigned()->index();

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
        Schema::drop('diagnosisnotes');
    }
}
