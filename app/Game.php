<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $guarded = array('id');
    // Validationの設定
    public static $rules = array(
        'name' => 'required',
        // 'game machine' => 'required',
        // 'nunber of people' => 'required',
        // 'matching' => 'required',
        // 'play style' => 'required',
        );
}
