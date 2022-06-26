@extends('layouts.main')
@section('content')
<H1 class="p-3"><i class="fas fa-solid fa-building"></i> Verivy</H1>
{{-- Card 1 --}}
{{-- {{ dd($verivis) }} --}}
@foreach ($verivis as $verivy)
<div class="row">
    <div class="col-4">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('public/gambarhotel/'.$verivy->hotel->gambar) }}" class="card-img-top" alt="hotel 1">
            <div class="card-body">
                <h5 class="card-title">{{ $verivy->hotel->namahotel }}</h5>
            </div>
            <table class="ml-3">
                <tr>
                    <td>Tanggal Check-In</td>
                    <td>:</td>
                    <td>{{ $verivy->dci }}</td>
                </tr>
                <tr>
                    <td>Tanggal Check-0ut</td>
                    <td>:</td>
                    <td>{{ $verivy->dco }}</td>
                </tr>
                <tr>
                    <td>Jumlah Kamar</td>
                    <td>:</td>
                    <td>{{ $verivy->jumlahkamar }}</td>
                </tr>
                <tr>
                    <td>Total Harga</td>
                    <td>:</td>
                    <td>{{ $verivy->hargatotal }}</td>
            </table>
            <div class="card-body">
                <div class="bg-success rounded">
                    {{-- <i class="fas fa-solid fa-check"></i> --}}
                    <div class="py-2" style="text-align: center">
                        Waiting Verivy
                    </div>
                </div>
                {{-- <a href="#" class="card-link btn btn-success">Batal Pesan</a> --}}
            </div>
        </div>
        @endforeach
    </div>
    @endsection
