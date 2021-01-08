<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateShiptoTable
 */
class CreateShiptoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipto', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('address_id')
                ->unsigned();
            $table->foreign('address_id')
                ->references('id')
                ->on('address');
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
        Schema::dropIfExists('shipto');
    }
}
