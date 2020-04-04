<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_types', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('artist_id')->unsigned();
            $table->bigInteger('type_id')->unsigned();
        });

        Schema::table('artist_types',function(Blueprint $table)
        {
            $table->foreign('artist_id')->references('id')
                ->on('artists')
                ->onDelete('cascade');

            $table->foreign('type_id')->references('id')
                ->on('types')
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
        Schema::dropIfExists('artist_types');
    }
}
