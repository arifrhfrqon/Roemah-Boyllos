@extends('admin.layout')

@section('title', 'Manajemen LKP')

@section('content')
<div class="container">
    <h2 class="fw-bold mb-4 text-success"><i class="bi bi-mortarboard"></i> Manajemen LKP</h2>

    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card p-4 text-center">
                <i class="bi bi-journal-bookmark fs-1 text-success mb-3"></i>
                <h5 class="fw-bold">Program Pelatihan</h5>
                <p>Kelola daftar program pelatihan dan modul pembelajaran.</p>
                <button class="btn btn-outline-success">Lihat Program</button>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card p-4 text-center">
                <i class="bi bi-people fs-1 text-success mb-3"></i>
                <h5 class="fw-bold">Data Peserta</h5>
                <p>Lihat dan atur peserta yang terdaftar di pelatihan.</p>
                <button class="btn btn-outline-success">Lihat Peserta</button>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 mb-4">
            <div class="card p-4 text-center">
                <i class="bi bi-award fs-1 text-success mb-3"></i>
                <h5 class="fw-bold">Sertifikat</h5>
                <p>Kelola sertifikat hasil pelatihan untuk peserta.</p>
                <button class="btn btn-outline-success">Kelola Sertifikat</button>
            </div>
        </div>
    </div>

    <div class="alert alert-info mt-4">
        <i class="bi bi-info-circle"></i> Fitur LKP ini masih dalam tahap pengembangan untuk integrasi data pelatihan dan laporan peserta.
    </div>
</div>
@endsection
