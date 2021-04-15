<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $guarded = array('id');
    // Validationの設定
    public static $rules = array(
        'name' => 'プレイヤー名',
        'game machine' => 'ゲーム機',
        'nunber of people' => '募集人数',
        'matching' => 'マッチ',
        'play style' => 'プレイスタイル',
        );
}
