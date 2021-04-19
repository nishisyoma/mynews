<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Game;
use Carbon\Carbon;

class GameController extends Controller
{
     public function add()
    {
        return view('admin.game.create');
    }

    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, Game::$rules);
    
        $game = new Game;
        $form = $request->all();
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        //データベースに保存する
        $game->fill($form);
        $game->save();
        
        return redirect('admin/game/create');
    }

    public function edit()
    {
        return view('admin.game.edit');
    }

    public function update()
    {
        return redirect('admin/game/edit');
    }
}