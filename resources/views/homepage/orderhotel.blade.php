@extends('layouts.main')
@section('title')
    Order Hotel {{ $datas->namahotel }}
@endsection
@section('content')
{{-- form --}}
<div class="container">
    {{-- {{ dd($datas) }} --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <table>
                    <tr class="card-tittle">
                        <td>
                            Form Order
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            {{ $datas->namahotel }}
                        </td>
                    </tr>
                    <tr class="card-tittle">
                        <td>
                            Address Hotel
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            {{ $datas->alamat }}
                        </td>
                    </tr>
                    <tr class="card-tittle">
                        <td>
                            Rating Hotel
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            {{ $datas->rating }}
                        </td>
                    </tr>
                    <tr class="card-tittle">
                        <td>
                            Price/nigth Hotel
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            {{ $datas->harga }}
                        </td>
                    </tr>
                </table>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="idtrx" id="idtrx" value="">
                        {{-- <input type="hidden" name="idtrx" id="idtrx"> --}}
                        <div class="form-group">
                            <label for="">Check-In Date</label>
                            <input type="date" name="dci" class="form-control" placeholder="Check-In Date">
                        </div>
                        <div class="form-group">
                            <label for="">Check-Out Date</label>
                            <input type="date" name="dco" class="form-control" placeholder="Check-Out Date">
                        </div>
                        <div class="form-group">
                            <label for="">Number of Rooms</label>
                            <input type="text" name="jumlahkamar" class="form-control" placeholder="number of rooms">
                        </div>
                        <input type="hidden" name="hargatotal" id="hargatotal" value="{{ $datas->harga }}">
                        {{-- <input type="hidden" name="bukti" id="bukti" value="{{ $datas->bukti }}"> --}}
                        <input type="hidden" name="bukti" id="bukti" value="0">
                        <input type="hidden" name="status" id="status" value="0">
                        <input type="hidden" name="idhotel" id="idhotel" value="{{ $datas->id }}">
                        <input type="hidden" name="iduser" id="iduser" value="{{ Auth::user()->id }}">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Order" id="order" name="order">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
