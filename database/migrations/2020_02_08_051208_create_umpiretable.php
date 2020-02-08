<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmpiretable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umpire', function (Blueprint $table) {
            $table->bigIncrements('umpire_id');
            $table->string('umpire_name');
            $table->date('dob');
            $table->unsignedBigInteger('umpire_country_id');
            $table->foreign('umpire_country_id')
                  ->references('country_id')
                  ->on('country');
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
        Schema::dropIfExists('umpiretable');
    }
}
