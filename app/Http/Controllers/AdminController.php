<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Trx;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Ui\Presets\React;

class AdminController extends Controller
{
    public function index()
    {
        // $hotel = DB::table('hotels')->where('id','2')->first();
        $hotel = Hotel::where('iduser',Auth::user()->id)->first();
        // dd($hotel);
        return view('admin.index',compact('hotel'));
    }
    public function tambahkamar(Request $request)
    {
        $hotel = Hotel::where('iduser',Auth::user()->id)->first();
        Hotel::where('id',$hotel->id)->update([
            'jumlahkamar'=>$request->tambahkamar+($hotel->jumlahkamar)
        ]);
        return back();

    }
    public function edithotel()
    {
        // $hotel = DB::table('hotels')->where('id','2')->first();

        // menampilkan data hotel
        // SELECT hotels.* FROM `hotels`
        // LEFT JOIN users ON hotels.iduser = users.id

        // $hotel = Hotel::find($idhotel);
        $hotel = Hotel::where('iduser',Auth::user()->id)->first();
        // dd($hotel);
        return view('admin.edithotel',compact('hotel'));
    }
    public function update(Request $request)
    {
        $hotel = Hotel::where('iduser',Auth::user()->id)->first();
        // update menggunakan model
        Hotel::where('iduser',$hotel)->update([
            'id'=> $request ->id,
            'namahotel' => $request -> namahotel,
            'gambar' => $request -> gambar,
            'alamat' => $request -> alamat,
            'alamatdetail' => $request -> alamatdetail,
            'rating' => $request -> rating,
            'jumlahkamar' => $request -> jumlahkamar,
            'harga' => $request -> harga,
        ]);
        // $hotel = DB::table('hotels')->where('id','2')->update([
        //     'id'=> $request ->id,
        //     'namahotel' => $request -> namahotel,
        //     'gambar' => $request -> gambar,
        //     'alamat' => $request -> alamat,
        //     'rating' => $request -> rating,
        //     'jumlahkamar' => $request -> jumlahkamar,
        //     'harga' => $request -> harga,
        // ]);
        return redirect()->route('admin');
    }
    public function verivy()
    {
        $aut=Auth::user();
        $authotel=Hotel::where('iduser',$aut->id)->with('user')->first();
        $trxes=Trx::where([['idhotel',$authotel->id],['status','1']])->with('user')->get();
        // dd($authotel);
        // dd($trxes);
        // return redirect()->route('adminverivy');
        return view('admin.verivy',compact('trxes'));
    }
    public function verivied(Request $request,$idorder)
    {
        // $verivied = Trx::where('id',$request);
        // dd($verivied);
        // $trx=Trx::where('id',$idorder)->get()->first();
        // $done=Trx::where('id',$idorder)->update([
        //     'bukti'=>$name,
        //     'status'=>'1'
        // ]);
        // $trx=Trx::where('id',$idorder)->get()->first();
        $done=Trx::where('id',$idorder)->update([
            'status'=>'2'
        ]);
        return redirect()->route('adminhistory');
    }
    public function history()
    {
        $aut=Auth::user();
        $authotel=Hotel::where('iduser',$aut->id)->with('user')->first();
        // dd($authotel);
        $histories=Trx::where([
            ['idhotel',$authotel->id],
            ['status','2']
        ])->with('user')->get();
        // dd($histories);
        return view('admin.history',compact('histories'));
    }
}