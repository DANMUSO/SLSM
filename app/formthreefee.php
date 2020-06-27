<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formthreefee extends Model
{
    protected $fillable = [
        'admissionno','bank','receiptno','amount'
       ];
}
