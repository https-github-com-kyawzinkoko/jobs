<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
     protected $table = "jobs";
    
    protected $fillable = [
        'name', 'email', 'phone', 'address' , 'description'
    ];

}
