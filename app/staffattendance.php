<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staffattendance extends Model
{
    protected $fillable = [
 'staffno','name','phone','email','checkin','checkout'
    ];
}
