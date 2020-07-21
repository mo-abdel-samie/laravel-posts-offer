<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    //table name
    protected $table = 'posts';
    //primary key.
    public $primarykey = 'id';
    // timestamps by default is true
    public $timestamps = true;
}
