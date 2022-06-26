<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }



    public function index()
    {
        return view('login.login');
    }
    public function login(Request $request)
    {
        $request->validate([ //validasi untuk login
            'email'=>'required|email',
            'password'=>'required',
        ]);
        // if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        $aaa=Auth::attempt($request->only('email','password')); //jika email dan password benar
        // abort(405);
        // dd($aaa);
        if ($aaa) { //jika email dan password benar
            $user = User::where('id',Auth::user()->id)->with('trxrole')->first() ;

            // menampilkan data user dan trxrole dimana id auth yang dihasu=ilkan oleh id user dengan trxrole
            //

            // dd($user->trxrole->idrole);
            // dd($user);
            if($user->trxrole->idrole == 1){ //jika email benar dan password benar dan role admin hotel
                return redirect()->route('dashboard');
            }
            else if($user->trxrole->idrole == 2){ //jika email benar dan password benar dan role admin hotel
                return redirect()->route('admin',compact('user'));
            }
            else if($user->trxrole->idrole == 3){ //jika email benar dan password benar dan role admin hotel
                $user = User::where('id',Auth::user()->id)->with('trxrole')->first();
                // $datas = Hotel::get();
                return redirect()->route('homepage');
                // return view('homepage.index',compact('user'));
            }

            // return redirect()->route('homepage')->with('success', 'Login Successfully'); //maka akan diarahkan ke halaman homepage
        }
        throw ValidationException::withMessages([
            'email' => ['Your email or password is wrong'],
        ]);
        // if($aaa){
        //     return redirect()->route('homepage');
        // }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerate();
        return redirect()->route('login');
    }
}