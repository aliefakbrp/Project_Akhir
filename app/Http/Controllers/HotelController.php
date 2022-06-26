<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HotelController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }
    public function index()
    {
        // $datas = DB::table('hotels')->get();
        return view('homepage.index',[
            'datas'=>Hotel::get(),
            'user'=>User::where('id',Auth::user()->id)->with('trxrole')->first()]
        );
    }
}
