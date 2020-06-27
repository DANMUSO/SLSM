<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formthreeattendance extends Model
{
    protected $fillable = [
        'student_id','name','phone','email','morning','evening' 
     ];
}
