<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistTypeShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artist_type_shows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });

        Schema::table('artist_type_shows', function (Blueprint $table)
        {
            $table->unsignedBigInteger('artist_type_id');
            $table  ->foreign('artist_type_id')
                    ->references('id')->on('artist_type')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');

            $table ->unsignedBigInteger('show_id');
            $table  ->foreign('show_id')
                    ->references('id')->on('shows')
                    ->onDelete('restrict')
                    ->onUpdate('cascade');
        });
    }



    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artist_type_shows');
    }
}
