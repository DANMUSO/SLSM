<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formonefee extends Model
{
    protected $table='formonefees';
    protected $fillable = [
        'admissionno','bank','receiptno','amount'
    ];
}
