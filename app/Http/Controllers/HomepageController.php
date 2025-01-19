<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
    //

    public function index(){
        // $sumdonate = DB::table('users')->sum('total_donation'); , compact('sumdonate')
        // dd($sumdonate);
        // dd(Auth::user());
        
        return view('homepage');
    }
}
