<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Game;

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

    public function  index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
          // 検索されたら検索結果を取得する
          $posts = Games::where('name', $cond_name)->get();
        } else {
          // それ以外はすべてのニュースを取得する
          $posts = Game::all();
        return view('admin.game.index', ['posts' => $posts, 'cond_name' => $cond_name]);
        }
    }
        
    public function update()
    {
        return redirect('admin/game/edit');
    }
}