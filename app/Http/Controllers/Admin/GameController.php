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

    public function create()
    {
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