<?php

namespace App\Http\Controllers;

use App\Models\Trx;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
    public function onprogress()
    {
        $user = User::where('id',Auth::user()->id)->with('trxrole')->first() ;
        $onprogress = Trx::where([['status','0'],['iduser',Auth::user()->id]])->with('hotel')->get();
        // dd($user);
        // dd($onprogress);
        return view('homepage.onprogress',compact('user','onprogress'));
    }
    public function verivy()
    {
        $user = User::where('id',Auth::user()->id)->with('trxrole')->first() ;
        $verivis = Trx::where([['status','1'],['iduser',Auth::user()->id]])->with('hotel')->get();
        // dd($user);
        // dd($onprogress);
        return view('homepage.verivy',compact('user','verivis'));
    }
    public function history()
    {
        $user = User::where('id',Auth::user()->id)->with('trxrole')->first() ;
        $histories = Trx::where([['status','2'],['iduser',Auth::user()->id]])->with('hotel')->get();
        // dd($user);
        // dd($onprogress);
        return view('homepage.history',compact('user','histories'));
    }
}