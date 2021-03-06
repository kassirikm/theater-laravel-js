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
            $table->UnsignedBigInteger('location_id')->nullable();
            $table->UnsignedBigInteger('category_id')->nullable();
            $table->string('slug', 60)->unique();
            $table->string('title', 255);
            $table->text('description')->nullable();
            $table->string('poster_url', 255)->nullable();
            $table->tinyInteger('bookable')->default(false);
            $table->decimal('price', 10, 2)->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->nullable();

            // Add the foreign key from the locations table
            $table->foreign('location_id')
                ->references('id')
                ->on('locations')
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
        Schema::dropIfExists('shows');
    }
}
