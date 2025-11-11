@extends('admin.layout')
@section('title', 'Dashboard')

@section('content')
<h2 class="mb-4">Dashboard Admin</h2>
<div class="row">
    <div class="col-md-4">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h5>Total Suplier</h5>
                <h2 class="text-success fw-bold">12</h2>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h5>Transaksi Bulan Ini</h5>
                <h2 class="text-primary fw-bold">48</h2>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <h5>Pendapatan</h5>
                <h2 class="text-warning fw-bold">Rp 27,5 Jt</h2>
            </div>
        </div>
    </div>
</div>
@endsection
