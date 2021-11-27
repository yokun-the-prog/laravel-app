<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destinations', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('tour_id')->constrained();
            $table->foreignId('spot_id')->constrained();
            $table->foreignId('erratum_division_id')->constrained();
            $table->time('arrive_at');
            $table->time('departure_at');
            $table->string('photorally_location', 250);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('destinations');
    }
}
