<?php
/**
 * Created by PhpStorm.
 * User: tutkovics
 * Date: 2017.01.16.
 * Time: 20:21
 */


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticpageController extends Controller
{
    public function getHomepage() {
        /* show homepage */
        return view('static.welcome');
    }

    public function getTermsOfUse() {
        /* show term of use */
        return view('static.tou');
    }

}
