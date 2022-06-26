@extends('layouts.main')
@section('content')
<h1 class="p-3"><i class="fas fa-clock"></i><b> History</b></h1>
<div class="row">
    @foreach ($histories as $history)
    <div class="card mb-3 col-6">
        <div class="row no-gutters">
            <div class="col-md-6">
                <img src="https://pix8.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?ca=6&ce=1&s=1024x768"
                    class="card-img-top" alt="hotel 1" height="200px" width="200px">
            </div>
            <div class="col-md-6">
                <h5 class="mt-4 ml-5">{{ $history->hotel->namahotel }}</h5>
                <table class="ml-3">
                    <tr>
                        <td>Tanggal Check-In</td>
                        <td>:</td>
                        <td>{{ $history->dci }}</td>
                    </tr>
                    <tr>
                        <td>Tanggal Check-0ut</td>
                        <td>:</td>
                        <td>{{ $history->dco }}</td>
                    </tr>
                    <tr>

                        <td>Jumlah Kamar</td>
                        <td>:</td>
                        <td>{{ $history->jumlahkamar }}</td>
                    </tr>
                    <tr>
                        <td>Total Harga</td>
                        <td>:</td>
                        <td>{{ $history->hargatotal }}</td>
                    </tr>
                </table>

            </div>
        </div>
    </div>
    @endforeach
</div>
{{-- <div class="card mb-3 col-6">
    <div class="row no-gutters">
        <div class="col-md-6">
            <img src="https://pix8.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?ca=6&ce=1&s=1024x768"
                class="card-img-top" alt="hotel 1" height="200px" width="200px">
        </div>
        <div class="col-md-6">
            <h5 class="mt-4 ml-5">{{ $hotel }}</h5>
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

        </div>
    </div>
</div>
<div class="card mb-3 col-6">
    <div class="row no-gutters">
        <div class="col-md-6">
            <img src="https://pix8.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?ca=6&ce=1&s=1024x768"
                class="card-img-top" alt="hotel 1" height="200px" width="200px">
        </div>
        <div class="col-md-6">
            <h5 class="mt-4 ml-5">{{ $hotel }}</h5>
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

        </div>
    </div>
</div>
<div class="card mb-3 col-6">
    <div class="row no-gutters">
        <div class="col-md-6">
            <img src="https://pix8.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?ca=6&ce=1&s=1024x768"
                class="card-img-top" alt="hotel 1" height="200px" width="200px">
        </div>
        <div class="col-md-6">
            <h5 class="mt-4 ml-5">{{ $hotel }}</h5>
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

        </div>
    </div>
</div>
<div class="card mb-3 col-6">
    <div class="row no-gutters">
        <div class="col-md-6">
            <img src="https://pix8.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?ca=6&ce=1&s=1024x768"
                class="card-img-top" alt="hotel 1" height="200px" width="200px">
        </div>
        <div class="col-md-6">
            <h5 class="mt-4 ml-5">{{ $hotel }}</h5>
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

        </div>
    </div>
</div>
<div class="card mb-3 col-6">
    <div class="row no-gutters">
        <div class="col-md-6">
            <img src="https://pix8.agoda.net/hotelImages/124/1246280/1246280_16061017110043391702.jpg?ca=6&ce=1&s=1024x768"
                class="card-img-top" alt="hotel 1" height="200px" width="200px">
        </div>
        <div class="col-md-6">
            <h5 class="mt-4 ml-5">{{ $hotel }}</h5>
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

        </div>
    </div>
</div> --}}

</div>
@endsection
