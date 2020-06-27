<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fleet extends Model
{
    protected $fillable = [
        'id','image','bus_name', 'no_plate', 'assigned_route','capacity','driver'
    ];
}
