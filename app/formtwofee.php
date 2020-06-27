<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formtwofee extends Model
{
    protected $fillable = [
        'admissionno','bank','receiptno','amount'
       ];
}
