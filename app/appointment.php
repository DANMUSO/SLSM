<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    protected $fillable = [
     'id','name','phone','email','person','adate','atime','purpose'
    ];
}
