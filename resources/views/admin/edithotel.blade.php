@extends('adminlayouts.main')
@section('title')
Edit Hotel
@endsection
@section('content')
{{-- {{ dd($hotel) }} --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Edit Hotel</h4>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        {{-- <form action="" method="POST" enctype="multipart/form-data"> --}}
                            @csrf
                            {{-- @method('PUT') --}}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Hotel Name</label>
                                        <input type="text" class="form-control" name="namahotel"
                                            value="{{ $hotel->namahotel }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Hotel Address</label>
                                        <input type="text" class="form-control" name="alamat"
                                            value="{{ $hotel->alamat }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Detail Address</label>
                                        <input type="text" class="form-control" name="alamatdetail"
                                            value="{{ $hotel->alamat }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price/Night</label>
                                        <input type="text" class="form-control" name="harga"
                                            value="{{ $hotel->harga }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price/Night</label>
                                        <input type="text" class="form-control" name="rating"
                                            value="{{ $hotel->rating }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Price/Night</label>
                                        <input type="text" class="form-control" name="jumlahkamar"
                                            value="{{ $hotel->jumlahkamar }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Picture</label>
                                        <input type="file" class="form-control" name="gambar"
                                            value="{{ $hotel->gambar }}">
                                    </div>
                                </div>
                                <input type="hidden" class="form-control" name="id" value="{{ $hotel->id }}">
                                <input type="hidden" class="form-control" name="iduser" value="{{ $hotel->iduser }}">
                            </div>
                            <input type="submit" class="btn btn-primary" name="submit">
                </div>
                </form>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
