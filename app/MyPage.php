<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MyPage extends Model
{
    // larevel-14 課題
    protected $guarded = array('id');
    // 名前・一言を追加
    public static $rules = array(
        'name' => 'required',
        'comment' => 'required',
    );
    public function histories()
    {
      return $this->hasMany('App\ProfileHistory');
    }

}