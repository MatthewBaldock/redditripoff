<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follow', function (Blueprint $table) {
           $table->unsignedInteger('userId')->length(10);
            $table->unsignedInteger('pageId')->length(10);
            $table->string('pageLink',45); 
			$table->timestamp('followTime')->useCurrent()->unique();
            $table->index('pageId','pageId_idx');
			$table->foreign('userId')->references('userId')->on('users')->onUpdate('cascade')->onDelete('cascade');
			$table->foreign('pageId')->references('pageID')->on('page');
        
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('follow');
    }
}
