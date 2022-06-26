<?php

namespace App\Http\Controllers;

use App\Models\Trx;
use App\Models\Trxe;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Trxrole;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index($idhotel)
    {
        // dd($idhotel);
        $datas=Hotel::where('id',$idhotel)->first();
        $user = User::where('id',Auth::user()->id)->with('trxrole')->first() ;
        // dd($datas);  // menampilkan data hotel
        // $datas = DB::table('hotels')->where('id', $idhotel)->first();
        return view('homepage.orderhotel', compact('datas','user'));
    }
    public function order(Request $request,$idhotel){
        $datas=Hotel::where('id',$idhotel)->get()->first();
        // dd($request);
        $data=Trx::create([
            // 'id' => $request->idtrx,
            $datetime1 = new DateTime($request->dci),
            $datetime2 = new DateTime($request->dco),
            $interval = $datetime1->diff($datetime2),
            $days = $interval->format('%a'),
            'dci' => $request->dci,
            'dco' => $request->dco,
            'jumlahkamar' => $request->jumlahkamar,
            'hargatotal' => $request -> hargatotal*$days*$request->jumlahkamar,
            'bukti' => $request->bukti,
            'status' => '0',
            'iduser' => $request->iduser,
            'idhotel' => $request->idhotel
        ]);
        // dd($data);
        // return view('homepage.orderhotel', compact('datas'));
        return redirect()->route('onprogress');
    }
    public function payment(Request $request, $idorder)
    {
        $order=Trx::where('id', $idorder)->with('hotel','user')->first();
        return view('homepage.payment', compact('order'));
    }
    public function paid(Request $request,$idorder)
    {
        // dd($request);
        $bukti=$request['bukti'];
        $name=time()."_".$bukti->getClientOriginalName();
        $bukti -> move('bukti',$name);
        $trx=Trx::where('id',$idorder)->get()->first();
        $done=Trx::where('id',$idorder)->update([
            'bukti'=>$name,
            'status'=>'1'
        ]);
        // dd($done);
        return redirect()->route('homepage');
    }
}