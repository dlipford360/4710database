<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicalprescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicalprescriptions', function (Blueprint $table) {
            $table->increments('medicalpersriptions_id');
            $table->date('date_dispensed');
            $table->integer('quantity_dispensed');
            $table->integer('refills_remaining');
            $table->float('cost');
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
        Schema::drop('medicalprescriptions');
    }
}
