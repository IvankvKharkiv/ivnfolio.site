<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   

        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('user_id')->nullable()->index();
            $table->boolean('approved')->default(0);
            $table->text('video_path');
            $table->text('video_trailer_path')->nullable();
            $table->text('youtube_trailer_link')->nullable();
            $table->text('poster_path')->default( 'images/videoPosters/noposter.jpg' ); 
            // 'imagesvideoPosters\noposter.jpg'
            $table->text('description')->nullable();
            $table->string('title');
            $table->tinyInteger('rating')->nullable();
            $table->string('ganre')->nullable();
            $table->date('release_date');
            $table->string('slug')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
