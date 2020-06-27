<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class eventimetable extends Model
{
    protected $fillable = [
     'eventdate','typedate','venue','audience','duration','guest'
    ];
}
