<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('locality_id');
            $table->timestamps();
            $table->string('slug');
            $table->string('designation');
            $table->string('address');
            $table->tinyInteger('website');
            $table->decimal('phone');
        });

        //Foreign key
        Schema::table('locations', function (Blueprint $table)
        {
            $table->foreign('locality_id')
                ->references('id')
                ->on('localities')
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
        Schema::dropIfExists('locations');
    }
}
