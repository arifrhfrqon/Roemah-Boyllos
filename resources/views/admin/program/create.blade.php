@extends('admin.layout')

@section('title', 'Tambah Program LKP')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Tambah Program LKP</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('program.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- Nama LKP -->
            <div class="mb-3">
                <label for="nama_lkp" class="form-label">Nama LKP</label>
                <input type="text" name="nama_lkp" id="nama_lkp"
                       class="form-control @error('nama_lkp') is-invalid @enderror"
                       value="{{ old('nama_lkp') }}" required>
                @error('nama_lkp') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!-- Deskripsi -->
            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="3"
                          class="form-control @error('deskripsi') is-invalid @enderror" required>{{ old('deskripsi') }}</textarea>
                @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!-- Alamat -->
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" id="alamat"
                       class="form-control @error('alamat') is-invalid @enderror"
                       value="{{ old('alamat') }}">
                @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!-- Email -->
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email"
                       class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email') }}">
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!-- Telepon -->
            <div class="mb-3">
                <label for="phone" class="form-label">Telepon</label>
                <input type="text" name="phone" id="phone"
                       class="form-control @error('phone') is-invalid @enderror"
                       value="{{ old('phone') }}">
                @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!-- Fitur -->
            <div class="mb-3">
                <label for="fitur" class="form-label">Fitur / Fasilitas</label>
                <textarea name="fitur" id="fitur" rows="2"
                          class="form-control @error('fitur') is-invalid @enderror">{{ old('fitur') }}</textarea>
                @error('fitur') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!-- Nama Program -->
            <div class="mb-3">
                <label for="program_name" class="form-label">Nama Program</label>
                <input type="text" name="program_name" id="program_name"
                       class="form-control @error('program_name') is-invalid @enderror"
                       value="{{ old('program_name') }}" required>
                @error('program_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!-- Foto -->
            <div class="mb-3">
                <label for="foto" class="form-label">Foto / Logo</label>
                <input type="file" name="foto" id="foto"
                       class="form-control @error('foto') is-invalid @enderror" accept="image/*">
                @error('foto') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <!-- Submit -->
            <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Simpan</button>
            <a href="{{ route('program.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection


