<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shows', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            // Add unicity constraint
            $table->string('slug',60)->unique();
            $table->string('title');
            $table->string('poster_url');
            $table->tinyInteger('bookable');
            $table->decimal('price');
        });

        Schema::table('shows',function (Blueprint $table){
            $table  ->unsignedBigInteger('location_id');
            $table  ->foreign('location_id')->nullable()
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
        Schema::dropIfExists('shows');
    }
}
