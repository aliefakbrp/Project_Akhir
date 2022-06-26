@extends('adminlayouts.main')
@section('content')
@foreach ($histories as $history)
{{-- {{ dd($history) }} --}}
<div class="row">
    <div class="col col-lg-4">
        <a href="#" class="nav-link">
            <div class="card">
                <div class="card-body">
                    <h5 class="mt-1">{{ $history->user->name }}</h5>
                    <table class="">
                        <tr>
                            <td class="col-8">Tanggal Check-In</td>
                            <td class="col-1">:</td>
                            <td>{{ $history->dci }}</td>
                        </tr>
                        <tr>
                            <td class="col-6">Tanggal Check-0ut</td>
                            <td class="col-1">:</td>
                            <td>{{ $history->dco }}</td>
                        </tr>
                        <tr>
                            <td class="col-6">Jumlah Kamar</td>
                            <td class="col-1">:</td>
                            <td>{{ $history->jumlahkamar }}</td>
                        </tr>
                        <tr>
                            <td class="col-6">Total Harga</td>
                            <td class="col-1">:</td>
                            <td>{{ $history->hargatotal }}</td>
                    </table>
                </div>
            </div>
        </a>
    </div>
</div>
@endforeach
@endsection
