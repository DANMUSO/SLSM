<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class salary extends Model
{
    protected $fillable = [
        'id', 'name', 'amount','receiptno'
    ];
}
