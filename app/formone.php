<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formone extends Model
{
    protected $fillable = [
        'id','fname','status','lname','phone','KCPEKCSEmarks','email','image','eng','kisw','math','chem','phy','bio','agr','bs','geo','hist','cre','ire','gen','hs','ad','ww','mw','bc',
        'ele','dd','at','cs','french','german','arabic','ksl','music','form','stream','first_name','last_name',
        'cell','kin_email','nationalid','kin_relationship','firstname','lastname',
        'kin_cell','kinemail','national_id','kinrelationship','sweater','shoes','sock','shirt',
        't_shirt','jacket','scout','health','east','west','north','south','discipline'
    ];
}
