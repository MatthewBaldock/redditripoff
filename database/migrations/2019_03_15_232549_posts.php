<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Posts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('posts', function (Blueprint $table) {
           /** $table->increments('commentId');
            $table->integer('questionId');
            $table->integer('parentCommentId');
            $table->string('commentText',255);
            $table->integer('author');
			$table->timestamp('dateSubmitted');
            $table->boolean('isEdited')->default(false);
            $table->boolean('isDeleted')->default(false);
            $table->integer('numTimesGilded')->default(0);
			*///$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
