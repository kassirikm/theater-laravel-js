<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtistsTable extends Migration
{
    /*
     Prevent SQL error if Laravel can't fill automatically
     created_at/updated_at
     https://laraveldaily.com/8-tricks-with-laravel-timestamps/
    */
    public $timestamps = FALSE;

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artists', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('firstname', 60);
            $table->string('lastname', 60);
            // Add a foreign key from the agencies table
            $table->UnsignedBigInteger('agency_id');
            $table->foreign('agency_id')
                ->references('id')->on('agencies')
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
        Schema::dropIfExists('artists');
    }
}
