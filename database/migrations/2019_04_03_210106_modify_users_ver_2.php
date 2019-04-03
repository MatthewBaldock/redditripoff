<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyUsersVer2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('users');
        Schema::create('users', function (Blueprint $table) {
          $table->increments('userId');
            $table->string('username',45);
            $table->string('email',200)->unique();
			$table->string('password');
            $table->boolean('email_verified')->default('0');
			$table->bigInteger('link_karma')->default('0');
			$table->bigInteger('comment_karma')->default('0');
			$table->string('pref_lang',45)->default('en');
			$table->boolean('pref_over18')->default('0');
			$table->boolean('pref_nsfw')->default('0');
			$table->string('pref_comments_sort',45)->default('new');
			$table->boolean('pref_content_label_nsfw')->default('0');

            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
