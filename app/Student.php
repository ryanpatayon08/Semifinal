<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'lname', 'fname', 'course', 'year'
    ];

    public function student(){
        return $this->belongsTo('App\Student');
    }
}
