<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fthreeperformance extends Model
{
    protected $fillable = [
        'id','mgrd','position','clsp','marks','point','eng','kisw','math','chem','phy','bio','agr','bs','geo','hist','cre','ire','gen','hs','ad','ww','mw','bc','ele','dd','at','cs','french','german','arabic','ksl','music'
    ];
}
