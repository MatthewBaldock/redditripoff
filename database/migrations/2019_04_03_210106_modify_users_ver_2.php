<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyUsersVer2 extends Migration
{
    /**
     * Run the migrations.
     * composer require doctrine/dbal
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
          
			$table->dropColumn('email_verified_at');
			$table->dropColumn('pref_clicking');
			$table->dropColumn('pref_link_thumb');
			$table->dropColumn('pref_media_preview');
			$table->dropColumn('pref_link_spotlight');
			$table->dropColumn('pref_link_trending_sub');
			$table->dropColumn('pref_link_recent');
			$table->dropColumn('pref_link_compress');
			$table->dropColumn('pref_link_hide_upvoted');
			$table->dropColumn('pref_link_downvoted');
			$table->dropColumn('pref_link_display');
			$table->dropColumn('pref_link_min_link_score');
			$table->dropColumn('pref_comments_ignore_suggested');
			$table->dropColumn('pref_comments_min');
			$table->dropColumn('pref_comments_display');
			$table->dropColumn('pref_message_show_conv_inbox');
			$table->dropColumn('pref_message_collapse');
			$table->dropColumn('pref_message_mark_read');
			$table->dropColumn('pref_message_notify');
			$table->dropColumn('pref_content_include_nsfw');
            */
        });
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
