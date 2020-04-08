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
            /*
            -  foreign key columns need to be unsigned or the migrations will not work
               this is because, by default, the id is unsigned
            -  Because the keyword big is used for the id
               big should be used as foreign keys type for the same reason
            */
            $table->UnsignedBigInteger('artist_id');
            $table->UnsignedBigInteger('type_id');
        });

        Schema::table('artist_types',function(Blueprint $table)
        {
            $table->foreign('artist_id')
                ->references('id')->on('artists')
                ->onDelete('cascade');

            $table->foreign('type_id')
                ->references('id')->on('types')
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
