<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    protected $table   = "offers";

    protected $filable = [
        'name','price','details','user_id','created_at','updated_at',
    ];

    protected $hidden  = ['created_at','updated_at',];
}
