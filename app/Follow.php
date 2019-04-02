<?php

namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
     use Notifiable;
	 	protected $table = 'follow';
	protected $primaryKey = 'followTime';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'pageId', 'userId', 'pageLink', 'followTime'
    ];
}
