<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToursTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('photorally_division_id')->constrained();
            $table->foreignId('transport_division_id')->constrained();
            $table->time('schedule');
            $table->string('departure_spot', 250);
            $table->time('departure_at');
            $table->string('return_spot', 250);
            $table->time('return_at');
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
        Schema::drop('tours');
    }
}
