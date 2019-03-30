<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {  
		/**Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
          $table->increments('userId');
            $table->string('username',45)->unique();
            $table->string('email',200)->unique();
            $table->boolean('email_verified')->default('0');
            $table->timestamp('email_verified_at')->nullable();
			$table->bigInteger('link_karma')->default('0');
			$table->bigInteger('comment_karma')->default('0');
			$table->string('pref_lang',45)->default('en');
			$table->boolean('pref_over18')->default('0');
			$table->boolean('pref_nsfw')->default('0');
			$table->boolean('pref_clicking')->default('0');
			$table->boolean('pref_link_thumb')->default('0');
			$table->boolean('pref_media_preview')->default('0');
			$table->boolean('pref_link_spotlight')->default('0');
			$table->boolean('pref_link_trending_sub')->default('0');
			$table->boolean('pref_link_recent')->default('0');
			$table->boolean('pref_link_compress')->default('0');
			$table->boolean('pref_link_hide_upvoted')->default('0');
			$table->boolean('pref_link_downvoted')->default('0');
			$table->boolean('pref_link_display')->default('0');
			$table->boolean('pref_link_min_link_score')->default('0');
			$table->string('pref_comments_sort',45)->default('new');
			$table->boolean('pref_comments_ignore_suggested')->default('0');
			$table->boolean('pref_comments_min')->default('0');
			$table->boolean('pref_comments_display')->default('0');
			$table->boolean('pref_message_show_conv_inbox')->default('0');
			$table->boolean('pref_message_collapse')->default('0');
			$table->boolean('pref_message_mark_read')->default('0');
			$table->boolean('pref_message_notify')->default('0');
			$table->boolean('pref_content_label_nsfw')->default('0');
			$table->boolean('pref_content_include_nsfw')->default('0');
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
