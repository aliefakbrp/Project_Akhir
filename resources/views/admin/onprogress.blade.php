@extends('adminlayouts.main')
@section('content')
<H1 class="p-3"><i class="fas fa-solid fa-money-bill"></i> Waiting Payment</H1>
<div class="row">
    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="https://pix8.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?ca=6&ce=1&s=1024x768" class="card-img-top" alt="hotel 1">
            <div class="card-body">
                <h5 class="card-title">Hotel Da Luna</h5>
            </div>
            <table class="ml-3">
                <tr>
                    <td>Tanggal Check-In</td>
                    <td>:</td>
                    <td>{{ $tanggal }}</td>
                </tr>
                <tr>
                    <td>Tanggal Check-0ut</td>
                    <td>:</td>
                    <td>{{ $tanggal }}</td>
                </tr>
                <tr>
                    <td>Jumlah Kamar</td>
                    <td>:</td>
                    <td>{{ $tanggal }}</td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td>:</td>
                    <td>{{ $tanggal }}</td>
            </table>
            <div class="card-body">
                <a href="#" class="card-link btn btn-primary" width="100px">Verivy</a>
            </div>
        </div>
    </div>
@endsection
