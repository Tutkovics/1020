<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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
            'passwd' => 'required|max:255',
            'checkbox' => 'required',
        ]);

        Session::flash('success', 'Mostmár be tudsz lépni!');

        /* store the new user */
        $user = new User;

        $user->name = $request['nick'];
        $user->email = $request['email'];
        //$user->salt = str_random(40);
        $user->password = bcrypt( $request['passwd'] );//Hash::make($request->passwd . $user->salt);
        $user->permission = 0;

        $user->save();

        return redirect()->route('index');
    }

    public function postAuth( Request $request){
        /* validate sign in request data */
        $this->validate($request, [
            'name' => 'required|max:255',
            'passwd' => 'required|max:255'
        ]);

        /* sign in authenticate */
        /*
        echo '<br>name: ' . $request['name'];
        echo '<br>pass: ' . $request['passwd'];
        echo '<br>hash: ' . bcrypt($request['passwd']);*/

        if ( Auth::attempt(['name' => $request['name'], 'password' => $request['passwd'] ])) {

            Session::flash('success', 'Sikeres authentikáció!');
            return view('static.welcome');
        }

        return 'fasz!!!!!!!!!!!!!';
        //return redirect()->back();
    }
}
