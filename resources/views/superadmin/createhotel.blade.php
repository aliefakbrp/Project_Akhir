@extends('superadminlayouts.main')
@section('tittle')
    Create Hotel
@endsection
@section('content')
{{-- form register --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Tambah Hotel</h4>
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="id" id="id">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Nama Hotel</label>
                                    <input type="text" class="form-control" placeholder="Nama Hotel" name="namahotel">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>gambar</label>
                                    <input type="gambar" class="form-control" name="gambar">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>alamat</label>
                                    <input type="alamat" class="form-control" name="alamat">
                                </div>
                            </div>
                        </div>
                        <input type="hidden" class="form-control" name="role" value="2">
                        <input type="submit" name="submit" id="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
