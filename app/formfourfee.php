<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formfourfee extends Model
{
    protected $fillable = [
     'admissionno','bank','receiptno','amount'
    ];
}
