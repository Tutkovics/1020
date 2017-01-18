<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Hookah;
use App\User;

class AdminController extends Controller
{
    public function getListUsers() {
        /* show users and edit/delet them */

        $users = User::orderBy('created_at', 'desc')->get();
        return view('admin.edit-users', ['users' => $users]);
    }

    public function getUserDelete( $id ) {
        $user = User::where('id', $id)->where('permission', '<=', '0')->first();
        $user->delete();

        Session::flash('success', 'Gratulálok kitöröltél egy fasszopót!');
        return redirect()->back();
    }

    public function getUserAdmin( $id ) {
        $user = User::where('id', $id)->first();
        $user->update(['permission' => 1]);

        Session::flash('danger', 'Még egy ember admin jogot kapott :(');
        return redirect()->back();
    }

    public function getUserData( $id ){
        $user = User::where('id', $id)->first();

        return view('admin.user-data', ['user' => $user]);
    }
}
