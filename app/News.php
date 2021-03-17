<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = array('id');
    //　laravel-14追記
    public static $lures = array(
        'title' => 'required',
        'body' => 'required',
    );
}
