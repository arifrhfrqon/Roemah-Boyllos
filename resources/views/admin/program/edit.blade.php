@extends('admin.layout')

@section('title', 'Edit Program LKP')

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Edit Program LKP</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('program.update', $program->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama_lkp" class="form-label">Nama LKP</label>
                <input type="text" name="nama_lkp" id="nama_lkp"
                       class="form-control @error('nama_lkp') is-invalid @enderror"
                       value="{{ old('nama_lkp', $program->nama_lkp) }}" required>
                @error('nama_lkp') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="3"
                          class="form-control @error('deskripsi') is-invalid @enderror" required>{{ old('deskripsi', $program->deskripsi) }}</textarea>
                @error('deskripsi') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" name="alamat" id="alamat"
                       class="form-control @error('alamat') is-invalid @enderror"
                       value="{{ old('alamat', $program->alamat) }}">
                @error('alamat') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email"
                       class="form-control @error('email') is-invalid @enderror"
                       value="{{ old('email', $program->email) }}">
                @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Telepon</label>
                <input type="text" name="phone" id="phone"
                       class="form-control @error('phone') is-invalid @enderror"
                       value="{{ old('phone', $program->phone) }}">
                @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="fitur" class="form-label">Fitur / Fasilitas</label>
                <textarea name="fitur" id="fitur" rows="2"
                          class="form-control @error('fitur') is-invalid @enderror">{{ old('fitur', $program->fitur) }}</textarea>
                @error('fitur') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="program_name" class="form-label">Nama Program</label>
                <input type="text" name="program_name" id="program_name"
                       class="form-control @error('program_name') is-invalid @enderror"
                       value="{{ old('program_name', $program->program_name) }}" required>
                @error('program_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <div class="mb-3">
                <label for="foto" class="form-label">Foto / Logo</label>
                @if($program->foto)
                    <div class="mb-2">
                        <img src="{{ asset($program->foto) }}" width="100" alt="Foto Lama">
                    </div>
                @endif
                <input type="file" name="foto" id="foto"
                       class="form-control @error('foto') is-invalid @enderror" accept="image/*">
                @error('foto') <div class="invalid-feedback">{{ $message }}</div> @enderror
            </div>

            <button type="submit" class="btn btn-success"><i class="bi bi-save"></i> Update</button>
            <a href="{{ route('program.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
