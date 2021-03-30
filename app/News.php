<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = array('id');
    //　laravel-14追記
    public static $rules = array(
        'title' => 'required',
        'body' => 'required',
    );
    
    // laaravel-17
    // News Modelに関連付けを行う
    public function histories()
    {
        return $this->hasMany('App\History');
    }
}
