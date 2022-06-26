@extends('layouts.main')
@section('content')
<H1 class="p-3"><i class="fas fa-solid fa-money-bill"></i> Waiting Payment</H1>
{{-- Card 1 --}}
<div class="row">
    @foreach ($onprogress as $onprogres)
    <div class="col-3">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('public/gambarhotel/'.$onprogres->hotel->gambar) }}" class="card-img-top" alt="hotel 1"
                width="200px" height="200px">
            <div class="card-body">
                <h5 class="card-title">{{ $onprogres->hotel->namahotel }}</h5>
                {{-- <h5 class="card-title">{{ $user->trxrole->idrole }}</h5> --}}
            </div>
            <table class="ml-3">
                <tr>
                    <td>Tanggal Check-In</td>
                    <td>:</td>
                    <td>{{ $onprogres->dci }}</td>
                </tr>
                <tr>
                    <td>Tanggal Check-0ut</td>
                    <td>:</td>
                    <td>{{ $onprogres->dco }}</td>
                </tr>
                <tr>
                    <td>Jumlah Kamar</td>
                    <td>:</td>
                    <td>{{ $onprogres->jumlahkamar }}</td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td>:</td>
                    <td>{{ $onprogres->hargatotal }}</td>
                </tr>
            </table>

            <div class="card-body">
                <a href="{{ route('payment',$onprogres->id) }}" class="card-link btn btn-danger">Cencel</a>
                <a href="#" class="card-link btn btn-warning">Edit</a>
                <a href="{{ route('payment',$onprogres->id) }}" class="card-link btn btn-primary">Pay</a>

            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
