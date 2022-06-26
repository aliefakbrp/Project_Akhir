<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Biodata;
use App\Models\Trxrole;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('login.register');
    }
    public function create(RegisterRequest $request)
    {
        User::create([
            'name' => $request -> name,
            'email'=> $request ->email,
            'password'=>Hash::make($request -> password),
        ]);
        $iduser=User::where('email',$request->email)->first();
        Trxrole::create([
            'iduser'=> $iduser-> id,
            'idrole'=> "3"
        ]);
        $iduser=User::where('email', $request->email)->first();
        Biodata::create([
            'nama'=> $request -> nama,
            'alamat'=> $request -> alamat,
            'nohp'=> $request -> nohp,
            'iduser'=> $iduser-> id
        ]);
        // session()->flash('message','Your account has been created');
        return redirect()->route('login')->with('success','Your account has been created');
    }
}