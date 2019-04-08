<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
class Posts extends Model
{
    use Notifiable;
	protected $primaryKey = 'postId';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'postId','pageId','parentCommendId','commentText',
		'author','dateSubmitted','isEdited','isDeleted',
		'numTimesGilded','postKarma','link','postTitle'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];
}
