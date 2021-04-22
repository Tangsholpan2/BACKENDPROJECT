<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientSuggestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_suggestions', function (Blueprint $table) {
           $table->increments('id');
           $table->unsignedBigInteger('client_id');
           $table->foreign('client_id')->references('id')->on('client_details');
           $table->string('suggestions');
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
        Schema::dropIfExists('client_suggestions');
    }
}
