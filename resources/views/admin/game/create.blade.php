{{-- layouts/game.bland.phpを読み込む --}}
    @extends('layouts.game')
    
    {{-- admin.bland.phpの@yield('content')に以下のタグを埋め込む --}}
    @section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>募集作成</h2>
                <form action="{{ action('Admin\GameController@create') }}" method="post" enctype="multipart/form-data">
                    @if (count($errors) > 0)
                    <ul>
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">プレイヤー名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                        </div>
                    </div>
                    {{-- セレクトボックスコード追記 ゲーム機選択・人数・(ランクかカジュアル)・プレイスタイル --}}
                    <form action="cgi-bin/formmail.cgi" method="post">
                        <p>ゲーム機:
                        <select name='game machine'>
                            <option value="0">ゲーム機選択</option>
                            <option value="PC">PC</option>
                            <option value="PS">PS</option>
                            <option value="Xbox">Xbox</option>
                            <option value="Switch">Switch</option>
                        </select></p><br>
                        <p>募集人数:
                        <select name='nunber of people'>
                            <option value="0">募集人数選択</option>
                            <option value="1">1人</option>
                            <option value="2">2人</option>
                        </select></p><br>
                        <p>マッチ:
                            <select name='matching'>
                            <option value="0">マッチを選択</option>
                            <option value="Rank">ランク</option>
                            <option value="casual">カジュアル</option>
                        </select></p><br>
                        <p>プレイスタイル:
                            <select name='play style'>
                            <option value="0">プレイスタイルを選択</option>
                            <option value="Let's have fun">誰でも歓迎します。</option>
                            <option value="Let's have fun">楽しく遊びましょう。</option>
                            <option value="Go to win">勝ちに行きます。</option>
                            <option value="Go to win">ポイント盛りたいです。</option>
                        </select></p><br>
                        {{ csrf_field() }}
                        <input type="submit" class="btn btn-primary" value="投稿">
                    </form>
                </div>
            </div>
        </div>