<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class enquiries extends Model
{
    protected $fillable = [
        'enquirytype','enquiry','person','clientname','phone','email','remark','followdate','followtime'
    ];
}
