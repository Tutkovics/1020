<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Hookah;
use Carbon\Carbon;

class HookahController extends Controller
{

    public function postNewHookahData( Request $request ) {
        /* Add new hookah */

        /* validating */
        $this->validate($request, [
            'flavor' => 'required|max:255',
        ]);

        /* store the new user */
        $hookah = new Hookah;
        $hookah->flavor = $request['flavor'];
        $hookah->added_by = Auth::id();
        $hookah->save();

        /* redirect to login page */
        Session::flash('success', 'Új pipa hozzáadva!');
        return redirect()->route('user.mypage');
    }

    public function getNewHookah() {
        /* show the form where you can add new cancer */
        return view('user.add-new-hookah');
    }

    public function getHookahHistory() {
        $hookahs = Hookah::orderBy('created_at','desc')->get();

        $yesterday = Carbon::now()->subDays(1);

        $todayHookahs = Hookah::where('created_at','>=',$yesterday);
        $todayPcs = $todayHookahs->count();
        return view('user.hookah-history', ['hookahs' => $hookahs, 'today' => $todayPcs]);
    }
}
