<?php

namespace App\Http\Controllers;

use App\Donation; 
use App\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
        $user = Auth::user();
        $donations = $user->donations()->orderBy('id')->get();
        return view('home', ['donations' => $donations], ['user' => $user]);
    }

    public function updateName(Request $request)
    {
        $user = Auth::user();
        
        if (isset($request->name)) {
            $user->name = $request->name; //画面で入力されたnameを代入
            $user->save(); //DBに保存
            return redirect()->route('home')->with('success_message', 'Update completed.');
            //一覧ページにリダイレクト+フラッシュメッセージ（トースト）
        } else {
            return redirect()->route('home')->with('error_message', 'Name is blank.');
            //Myページにリダイレクト+エラートースト
        }
    }

    public function updateEmail(Request $request)
    {
        $user = Auth::user();

        if (isset($request->email)) {
            $user->email = $request->email; //画面で入力されたemailを代入
            $user->save(); //DBに保存

            return redirect()->route('home')->with('success_message', 'Update completed.');
            //Myページにリダイレクト+トースト
        } else {
            return redirect()->route('home')->with('error_message', 'Email is blank.');
            //Myページにリダイレクト+エラートースト
        }
        
    }

    public function updatePassword(Request $request)
    {
        
        $user = Auth::user();

        if (Hash::check($request->current_password, $user->password))
        { 
            if ($request->new_password === $request->confirm_password && isset($request->new_password))
            { 
                $request->user()->fill([
                    'password' => Hash::make($request->new_password)
                ])->save();
                return redirect()->route('home')->with('success_message', 'Update completed.');
                //Myページにリダイレクト+トースト
            } else {
                return redirect()->route('home')->with('error_message', 'New password or confirm password error.'); //一覧ページにリダイレクト
            }
        } else {
            return redirect()->route('home')->with('error_message', 'Current password error.');
            //Myページにリダイレクト+トースト
        }
    }

    public function deleteUser(Request $request)
    {
        $user = Auth::user();

        if (Hash::check($request->current_password, $user->password))
        { 
            $user->delete();
            return redirect()->route('welcome')->with('success_message', 'User deleted.');
        } else {
            return redirect()->route('home')->with('error_message', 'Current password error.');
        }
    }
}