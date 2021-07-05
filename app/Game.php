<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $guarded = array('id');
    //
    public static $rules = array(
        'name' => 'required',
    );
}
