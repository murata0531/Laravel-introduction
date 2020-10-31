<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth; 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = \Auth::user();
 
        // ログイン者以外のユーザを取得する
        //$Susers = User::where('id' ,'<>' , $user->id)->get();

        $users = \DB::select('select * from users where id = ?',[$user->id]);
        // チャットユーザ選択画面を表示
        return view('chat_user_select' , compact('users'));
    }
}
