<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSpotFilepathsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spot_filepaths', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('spot_id')->constrained();
            $table->string('highlight_path', 250);
            $table->string('route_path', 250);
            $table->string('photorally_path', 250);
            $table->string('title', 250);
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
        Schema::drop('spot_filepaths');
    }
}
