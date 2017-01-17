<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;

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
        //echo $user->name . ' -- Név<br>';

        return view('user.mypage');
    }
}
