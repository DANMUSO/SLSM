<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
    protected $fillable = [
    'fname','lname','phone','email','nationalid','gender','birth','nationality','image','accountholder','account','bank','branch','id','department','designation','joindate','basic','transport','medical','house','nssf','nhif','county'   
    ];
}
