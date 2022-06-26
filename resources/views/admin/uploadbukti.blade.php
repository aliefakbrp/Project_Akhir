@extends('adminlayouts.main')
@section('content')
<H1 class="p-3"><i class="fas fa-solid fa-money-bill"></i> Waiting Payment</H1>
<div class="row">
    <div>
        <form action="{{ route('uploadbukti') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Bukti Pembayaran</label>
                <input type="file" class="form-control" name="bukti">
            </div>
        </form>
    </div>
</div>
@endsection
