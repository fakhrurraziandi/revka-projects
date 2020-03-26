<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderCarouselTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_carousel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('subtitle')->nullable();
            $table->text('link_url')->nullable();
            $table->text('link_text')->nullable();
            $table->text('image_file')->nullable();
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
        Schema::dropIfExists('header_carousel');
    }
}
