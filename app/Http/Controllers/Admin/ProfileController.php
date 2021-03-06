<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profile;
//laravel-17課題
use App\ProfileHistory;
use Carbon\Carbon;
//

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }
    
    public function create(Request $request)
    {
        // Varidationを行う
        $this->validate($request, Profile::$rules);
    
        $profile = new Profile;
        $form = $request->all();
        // フォームから送信されてきた_tokenを削除する
        unset($form['_token']);
        //データベースに保存する
        $profile->fill($form);
        $profile->save();
        
        return redirect('admin/profile/create');
    }

    public function edit(Request $request)
    {
        $profile = profile::find($request->id);
        if (empty($profile)){
            abort(404);
        }
        
        return view('admin.profile.edit', ['profile_form' => $profile]);
    }

    public function update(Request $request)
    {
        $this->validate($request, Profile::$rules);
        $profile = profile::find($request->id);
        $profile_form = $request->all();
        
        unset($profile_form['_token']);
        
        $profile->fill($profile_form)->save();
        
        $profile_history = new ProfileHistory;
        $profile_history->profile_id = $profile->id;
        $profile_history->edited_at = Carbon::now();
        $profile_history->save();
        
        return redirect('admin/profile/edit?id='.$request->id);
    }
}