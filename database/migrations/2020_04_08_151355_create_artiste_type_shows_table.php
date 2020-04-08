<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtisteTypeShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artiste_type_shows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
        });

        Schema::table('artiste_type_shows', function (Blueprint $table)
        {
            $table->unsignedBigInteger('artist_type_id');
            $table  ->foreign('artist_type_id')
                    ->references('id')->on('artist_types')
                    ->onDelete('cascade');

            $table ->unsignedBigInteger('show_id');
            $table  ->foreign('show_id')
                    ->references('id')->on('shows')
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
        Schema::dropIfExists('artiste_type_shows');
    }
}
