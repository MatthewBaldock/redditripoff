<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
     use Notifiable;
	 	protected $table = 'page';
	protected $primaryKey = 'pageID';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pageID', 'username', 'dateTime', 'pageDescrip','subreddit'
    ];
}
