<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mony extends Model
{

    protected $fillable = [
        'name', 'Phone', 'National','gander','Age','Weight','cost',
    ];

    
}
