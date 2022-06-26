@extends('adminlayouts.main')
@section('content')
{{-- form --}}
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Form Order Hotel</h3>
                </div>
                <div class="card-body">
                    <div class="card-body">Kamar Kosong tersedia : {{ $hotel->jumlahkamar }}</div>
                    <form action="" method="POST">
                        {{-- <form action="{{ route('order.store') }}" method="POST"> --}}
                            @csrf
                            <input type="hidden" name="id_hotel" id="id_hotel">
                            <div class="form-group">
                                <label for="tambahkamar">Tambah Kamar</label>
                                <input type="text" name="tambahkamar" class="form-control" placeholder="Tambah Kamar">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="tambah" id="submit" name="submit">
                            </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
