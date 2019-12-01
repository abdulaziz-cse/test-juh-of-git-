<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $fillable = [
        'firstname', 'Nationality', 'Number','Type','Phone','city','state','zip','Age','Natonality1','expmonth',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }

}
