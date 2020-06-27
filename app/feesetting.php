<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feesetting extends Model
{
    protected $fillable = [
        'id','category','form','term','deadline','amount'
    ];
}
