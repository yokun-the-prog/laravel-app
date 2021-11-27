<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourFilepathsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_filepaths', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('tour_id')->constrained();
            $table->string('map_path', 250);
            $table->string('history_path', 250);
            $table->string('photorally_path', 250);
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
        Schema::drop('tour_filepaths');
    }
}
