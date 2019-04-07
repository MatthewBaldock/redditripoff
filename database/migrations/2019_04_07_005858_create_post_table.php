<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::dropIfExists('post');
        Schema::create('post', function (Blueprint $table) {
            $table->increments('postId');
            $table->string('commentText',255);
            $table->integer('author');
			$table->timestamp('dateSubmitted');
            $table->boolean('isEdited')->default(0);
            $table->boolean('isDeleted')->default(0);
            $table->integer('numTimesGilded')->default(0);
			$table->bigInteger('postKarma')->default(0);
			$table->string('link',255);
			$table->string('postTitle',255);
            $table->integer('pageId');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post');
    }
}
