<?php

namespace App\Http\Controllers;

use index;
// use App\Models\Su;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Trxrole;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SuController extends Controller
{
    public function index()
    {
        // $datas = Hotel::with('user')->get();
        // dd($datas);
        return view('superadmin.index',
    [
        'datas' => Hotel::with('user')->get()
        // "datas"=>User::leftjoin('trxroles','users.id','=','trxroles.iduser')->leftjoin('hotels','users.id','=','hotels.iduser')->where('idrole',2)->get() //untuk menampilkan data admin hotel yang sudah terdaftar
        // "datas"=>User::get()
        ] );
    }
    public function create(UserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password'=>Hash::make($request -> password),
        ]);
        $iduser= User::where('email',$request->email)->first();
        Trxrole::create([
            'iduser' => $iduser->id,
            'idrole' => 2
        ]);
        $iduser= User::where('email',$request->email)->first();
        Hotel::create([
            'namahotel'=> '0',
            'gambar'=> '0',
            'alamat'=> '0',
            'alamatdetail'=>'0',
            'rating'=> '0',
            'jumlahkamar'=> '0',
            'harga'=> '0',
            'iduser'=> $iduser->id,
        ]);

        return back();
        // return view('superadmin.verivy');
    }

    public function hapus($iduser)
    {

        $data = User::find($iduser)->delete();
        // dd($data);
        return redirect()->route('dashboard');

    }
    public function suedithotel(Request $request, $iduser)
    {
        // $hotel = DB::table('hotels')->where('id','2')->first();

        // menampilkan data hotel
        // SELECT hotels.* FROM `hotels`
        // LEFT JOIN users ON hotels.iduser = users.id

        // $hotel = Hotel::leftjoin('users','hotels.iduser','=',$iduser)->get();
        $hotel = Hotel::where('id',$iduser)->first();
        // dd($hotel);
        return view('superadmin.edithotel',compact('hotel'));
        // return redirect()->route('suedithotel',compact('hotel'));
    }
    public function suupdate(Request $request)
    {
        // dd($request);
        // update menggunakan model
        // ddd($request);
        $gambar=$request['gambar'];
        $name=time()."_".$gambar->getClientOriginalName();
        $gambar -> move('public/gambarhotel',$name);

        Hotel::where('id',$request->id)->update([
            'id'=> $request ->id,
            'namahotel' => $request -> namahotel,
            'gambar' => $name,
            'alamat' => $request -> alamat,
            'alamatdetail' => $request -> alamatdetail,
            'rating' => $request -> rating,
            'jumlahkamar' => $request -> jumlahkamar,
            'harga' => $request -> harga,
            'iduser' => $request -> iduser,

            // $folderupload=$request->file('gambar')->store('public.gambarhotel');
        ]);
        // $hotel = DB::table('hotels')->where('id',$iduser)->update([
        //     'id'=> $request ->id,
        //     'namahotel' => $request -> namahotel,
        //     'gambar' => $request -> gambar,
        //     'alamat' => $request -> alamat,
        //     'rating' => $request -> rating,
        //     'jumlahkamar' => $request -> jumlahkamar,
        //     'harga' => $request -> harga,
        // ]);
        // return view('superadmin.index');
        return redirect()->route('dashboard');
    }
    public function uploadgambar(Request $request)
    {

    }
}
