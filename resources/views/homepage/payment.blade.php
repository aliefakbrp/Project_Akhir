@extends('layouts.main')
@section('content')
ini payment
<div class="col col-lg-3 d-flex justify-content-between">
    <div class="card-body">
        <h2>{{ $order->hotel->nama }}</h2>
        <div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('public/gambarhotel/'.$order->hotel->gambar) }}" class="card-img-top" alt="hotel 1"
                    width="200px" height="200px">
                <div class="card-body">
                    <h5 class="card-title">{{ $order->hotel->namahotel }}</h5>
                    {{-- <h5 class="card-title">{{ $user->trxrole->idrole }}</h5> --}}
                </div>
                <table class="ml-3">
                    <tr>
                        <td>Tanggal Check-In</td>
                        <td>:</td>
                        <td>{{ $order->dci }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Check-0ut</td>
                        <td>:</td>
                        <td>{{ $order->dco }}</td>
                    </tr>
                    <tr>
                        <td>Jumlah Kamar</td>
                        <td>:</td>
                        <td>{{ $order->jumlahkamar }}</td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td>:</td>
                        <td>{{ $order->hargatotal }}</td>
                    </tr>
                </table>
                <h5 class="card-title ml-3 my-2">Bukti</h5>
                <form action="" method="POST" enctype="multipart/form-data" class="card-boy">
                    @csrf
                    <input type="file" id="bukti" name="bukti" class="form-control-file">
                    <input type="hidden" name="status" id="status" value="1">
                    <input type="submit" class="my-3 mx-2 btn btn-primary" name="submit" id="submit">
                </form>
            </div>
        </div>

    </div>
</div>
</div>
@endsection
