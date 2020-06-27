<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class schoolevent extends Model
{
    protected $fillable = [
        'typevent','venue','numberp','startdate','endate','participants','duration','resources'
    ];
}
