<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    // 名前・性別・趣味・自己紹介を追加
    public static $rules = array(
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
    public function histories()
    {
      return $this->hasMany('App\ProfileHistory');
    }

}