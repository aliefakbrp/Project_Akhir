@extends('adminlayouts.main')
@section('tittle')
Admin
@endsection
@section('content')
@foreach ($trxes as $trx)
<div class="row">
    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('public/gambarhotel/'.$trx->hotel->gambar) }}" class="card-img-top" alt="hotel 1">
            <div class="card-body">
                <h5 class="card-title">{{ $trx->hotel->namahotel }}</h5>
            </div>
            <table class="ml-3">
                <tr>
                    <td>Tanggal Check-In</td>
                    <td>:</td>
                    <td>{{ $trx->dci }}</td>
                </tr>
                <tr>
                    <td>Tanggal Check-0ut</td>
                    <td>:</td>
                    <td>{{ $trx->dco }}</td>
                </tr>
                <tr>
                    <td>Jumlah Kamar</td>
                    <td>:</td>
                    <td>{{ $trx->jumlahkamar }}</td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td>:</td>
                    <td>{{ $trx->hargatotal }}</td>
            </table>
            <div class="card-body">
                <div class="bg-success rounded">
                    {{-- <i class="fas fa-solid fa-check"></i> --}}
                    <div class="py-2" style="text-align: center">
                        {{-- <form action="{{ route('adminverivied') }}" method="post">
                            @csrf
                            <input type="submit" name="submit" id="submit" value="Verivy">
                        </form> --}}
                        {{-- <a href="{{ route('payment',$onprogres->id) }}" class="card-link btn btn-primary">Pay</a>
                        --}}
                        <a href="{{ route('adminverivied',$trx->id) }}"> Verivy </a>
                    </div>
                </div>
                {{-- <a href="#" class="card-link btn btn-success">Batal Pesan</a> --}}
            </div>
        </div>
    </div>
    @endforeach
    @endsection
