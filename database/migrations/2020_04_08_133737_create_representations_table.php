<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representations', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->timestamps();
            $table->dateTime('when');
        });

        Schema::table('representations', function (Blueprint $table){
            $table->unsignedBigInteger('show_id');
            $table  ->foreign('show_id')
                    ->references('id')->on('shows')
                    ->onDelete('cascade');
        });

        Schema::table('representations', function (Blueprint $table){
            $table->unsignedBigInteger('location_id');
            $table  ->foreign('location_id')
                    ->references('id')->on('locations')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('representations');
    }
}
