<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Send extends Model
{

    protected $fillable = [
        'name', 'Phone', 'National','gander','Age','Weight','TypeBlood',
    ];

    
}
