<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class award extends Model
{
    protected $fillable = [
     'id','image','category','award_date'
    ];
}
