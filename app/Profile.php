<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    // larevel-14 課題
    protected $guarded = array('id');
    // 名前・性別・趣味・自己紹介を追加
    public static $rules = array(
        'name' => 'required',
        'genbar' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
}
