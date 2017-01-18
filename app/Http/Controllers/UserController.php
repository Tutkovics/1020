<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;
use App\Hookah;

class UserController extends Controller
{
    public function getReg() {
        /* show the registration form */
        return view('user.reg-screen');
    }

    public function getLogin() {
        /* show login screen */
        return view('user.login-screen');
    }

    public function postRegData( Request $request ) {
        /* process the input data */

        /* validating */
        $this->validate($request, [
            'nick' => 'required|max:255|unique:users,name',
            'email' => 'required|max:255|unique:users,email|email',
            'passwd' => 'required|max:255|min:4',
            'checkbox' => 'required',
        ]);


        /* store the new user */
        $user = new User;

        $user->name = $request['nick'];
        $user->email = $request['email'];
        //$user->salt = str_random(40);
        $user->password = bcrypt( $request['passwd'] );//Hash::make($request->passwd . $user->salt);
        $user->permission = 0;

        $user->save();

        /* redirect to login page */
        Session::flash('success', 'Sikeres regisztráció! Mostmár be tudsz lépni!');
        return redirect()->route('user.login');
    }

    public function postAuth( Request $request){
        /* validate sign in request data */
        $this->validate($request, [
            'name' => 'required|max:255',
            'passwd' => 'required|max:255'
        ]);

        /* sign in authenticate */
        $rememberme = $request['rememberme'];

        if ( Auth::attempt(['name' => $request['name'], 'password' => $request['passwd'] ], $rememberme)) {
            /* in case of correct suthentication */
            Session::flash('success', 'Sikeres authentikáció!');
            return redirect()->route('user.mypage');
        }

        Session::flash('danger', 'Rossz név - jelszó páros. Próbáld újra.');
        return redirect()->back();
    }

    public function getLogout() {
        /* logout the user */
        Auth::logout();
        Session::flush();
        Session::flash('success', 'Sikeres kijelentkezés');

        return view('static.welcome');
    }

    public function getMyPage() {
        $lastHookah = Hookah::orderBy('created_at', 'desc')->first();
        $diff = $lastHookah->created_at->diffInSeconds() / 60; /* in minute */
        $diffSend = $lastHookah->created_at->diffForHumans();

        $color = '#5cb85c';
        if ( $diff < 10){
            $status = 'Készül';
        } elseif ( $diff < 50 ){
            $status = 'Van';
        } elseif ( $diff < 80 ){
            $status = 'Haldoklik';
        } else {
            $status = 'Nincs';
            $color = '#D06967';
        }

        return view('user.mypage',['status' => $status, 'diff' => $diffSend, 'color' => $color]);
    }
}
