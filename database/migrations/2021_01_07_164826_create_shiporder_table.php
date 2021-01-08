<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShiporderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shiporder', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('person_id')
                ->unsigned();
            $table->foreign('person_id')
                ->references('id')
                ->on('person');
            $table->bigInteger('shipto_id')
                ->unsigned();
            $table->foreign('shipto_id')
                ->references('id')
                ->on('shipto');
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
        Schema::dropIfExists('shiporder');
    }
}
