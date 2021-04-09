<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class GameController extends Controller
{
    public function add()
    {
        return view('admin.game.create');
    }
    
    public function create(Request $request)
    {
    // フォームから送信されてきた_tokenを削除する
    unset($form['_token']);
    //データベースに保存する
    $news->fill($form);
    $news->save();
        
        return redirect('admin/game/create');
    }
}