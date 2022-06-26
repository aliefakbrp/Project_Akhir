@extends("layouts.main")
@section("title")
Index
@endsection
@section('content')
<H1 class="p-3"><i class="fas fa-solid fa-building"></i> Hotels</H1>
<div class="row ml-3 mx-3 mt-3" style="color: black;">
    {{-- {{ dd($datas) }} --}}
    @foreach ($datas as $data)
    <div class="col col-lg-3 d-flex justify-content-between">
        <a href="{{ route('detailhotel',$data->id) }}" class="nav-link">
            <div class="card" style="width: 13rem;">
                <img class="card-img-top" src="{{ asset('public/gambarhotel/'. $data->gambar) }}" alt="hotel 1"
                    width="200px" height="200px">
                <div class="card-body">
                    <h5 class="card-text"><b>{{ $data -> namahotel }}</b></h5>
                    <p class="card-text">Address : {{ $data-> alamat }} </p>
                    <p class="card-text">Rating : {{ $data-> rating }} </p>
                    <p class="card-text">Price : Rp.{{ $data-> harga}} </p>
                    <p><small>154K </small><i class="fas fa-solid fa-heart"></i></p>
                </div>
            </div>
        </a>
    </div>
    @endforeach

</div>
@endsection
