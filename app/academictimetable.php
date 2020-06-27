<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class academictimetable extends Model
{
    protected $fillable = [
     'level','day','lessontwo','lessonthree','lessonfive','lessonsix','lessoneight','lessonnine','lessoneleven','lessontwelve','lessonthirteen','lessonfourteen'
    ];
}
