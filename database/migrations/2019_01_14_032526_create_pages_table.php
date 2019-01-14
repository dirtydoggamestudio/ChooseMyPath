<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('story_id')->unsigned()->index();
            $table->string('author');
            $table->tinyInteger('public')->default(1);
            $table->integer('page_no')->nullable();
            $table->tinyInteger('page_start')->nullable();
            $table->tinyInteger('page_end')->nullable();
            $table->string('question')->default('Ask a question');
            $table->text('explanation')->nullable();
            $table->string('choice1')->default('Choice 1');
            $table->string('choice2')->nullable();
            $table->string('video_id')->default('Enter the youtube video id');
            $table->string('video_start')->nullable();
            $table->string('video_stop')->nullable();
            $table->timestamps();

            $table->foreign('story_id')->references('id')->on('stories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
