<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class institution extends Model
{
    protected $fillable = [
        'image','type','premise','resources','capacity','required'
    ];
}
