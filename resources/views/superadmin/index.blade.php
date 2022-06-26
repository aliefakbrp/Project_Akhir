@extends('superadminlayouts.main')
@section('tittle')
Superadmin
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
                    <form action="{{ route('dashboard') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Nama Hotels</label>
                                    <input type="text" class="form-control" placeholder="Nama Hotel" name="name">
                                    {{-- <input type="text" class="form-control" placeholder="Nama Hotel" name="name">
                                    --}}
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>

                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    {{-- <input type="email" class="form-control" name="email"
                                        value="{{ old('email') }}"> --}}
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Password">
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
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
    <div class="row">
        {{-- {{ dd($datas) }} --}}
        @foreach ($datas as $data)
        {{-- {{ dd($data->iduser) }} --}}
        <div class="card mb-3 col-6">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <img src="{{ asset('public/gambarhotel/'. $data->gambar) }}" class="card-img-top"
                        alt="hotel {{ $data->name }}" height="215px" width="200px">
                </div>

                <div class="col-md-6">
                    <h5 class="mt-4 ml-5">{{ $data->namahotel }}</h5>
                    <table class="ml-3">
                        <tr>
                            <td>Id &nbsp;</td>
                            <td>: &nbsp;</td>
                            <td>{{ $data->id }} &nbsp;</td>
                            {{-- <td>{{ $data->id }} &nbsp;</td> ini yang salah --}}
                        </tr>
                        <tr>
                            <td>Nama Hotel &nbsp;</td>
                            <td>: &nbsp;</td>
                            <td>{{ $data->namahotel }} &nbsp;</td>
                        </tr>
                        <tr>
                            <td>Address &nbsp;</td>
                            <td>: &nbsp;</td>
                            <td>{{ $data->alamat }} &nbsp;</td>
                            {{-- <td>{{ $data->user->name }} &nbsp;</td> --}}
                        </tr>
                        <tr>
                            <td>Price &nbsp;</td>
                            <td>: &nbsp;</td>
                            <td>{{ $data->harga }} &nbsp;</td>
                        </tr>
                        {{-- <tr>
                            <td>Password &nbsp;</td>
                            <td>: &nbsp;</td>
                            <td>{{ $data->password }} &nbsp;</td>
                        </tr> --}}
                    </table>
                    <div class="m-2">
                        <a href="{{ route('hapus', $data->iduser) }}" class="btn btn-warning">Hapus</a>
                        {{-- <a href="{{ route('edithotel',$data->iduser) }}" class="btn btn-warning">edithotel</a> --}}
                        <a href="{{ route('suedithotel', $data->id) }}" class="btn btn-warning">edithotel</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
