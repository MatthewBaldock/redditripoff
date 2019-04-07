<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
	protected $primaryKey = 'userId';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'userId','username', 'email', 'password','pref_lang'
		,'pref_over18','pref_nsfw','pref_clicking','pref_link_thumb'
		,'pref_media_preview','pref_link_spotlight','pref_link_trending_sub'
		,'pref_link_recent','pref_link_compress','pref_link_hide_upvoted'
		,'pref_link_downvoted','pref_link_display','pref_link_min_link_score'
		,'pref_comments_sort','pref_comments_ignore_suggested','pref_comments_min'
		,'pref_comments_display','pref_message_show_conv_inbox','pref_message_collapse'
		,'pref_message_mark_read','pref_message_notify','pref_content_label_nsfw'
		,'pref_content_include_nsfw'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
