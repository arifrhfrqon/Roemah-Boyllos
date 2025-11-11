@extends('layouts.app')

@section('title', 'Pendaftaran LKP')

@section('content')
<section class="py-5">
    <div class="container">
        <h3 class="fw-bold text-success text-center mb-4">Formulir Pendaftaran LKP</h3>

        <form action="{{ route('lkp.store') }}" method="POST" class="card shadow-sm p-4 border-0 mx-auto" style="max-width: 650px;">
            @csrf

            <div class="mb-3">
                <label class="form-label fw-semibold">Nama Lengkap</label>
                <input name="name" type="text" class="form-control" placeholder="Masukkan nama lengkap..." required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Email</label>
                <input name="email" type="email" class="form-control" placeholder="Alamat email aktif..." required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">No. WhatsApp</label>
                <input name="whatsapp" type="text" class="form-control" placeholder="08xxxxxxxxxx" required>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Program Pelatihan</label>
                <select name="program" class="form-select" required>
                    <option value="">-- Pilih Program --</option>
                    <option value="Pertanian Modern">Pertanian Modern</option>
                    <option value="Pengembangan UMKM">Pengembangan UMKM</option>
                    <option value="Inkubasi Bisnis">Inkubasi Bisnis</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label fw-semibold">Alamat</label>
                <textarea name="address" class="form-control" rows="3" placeholder="Tuliskan alamat lengkap..." required></textarea>
            </div>

            <div class="text-center">
                <button class="btn btn-success px-4 py-2 fw-semibold rounded-pill">
                    Kirim Pendaftaran
                </button>
            </div>
        </form>

    </div>
</section>
@endsection
