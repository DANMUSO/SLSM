<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class couriersinward extends Model
{
    protected $fillable = [
        'name','phone','email','product','couriertype','receiveddte','capacity','remark','particulars','capacity'
            ];
}
