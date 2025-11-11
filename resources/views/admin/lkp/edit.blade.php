@extends('admin.layout')
@section('title', 'Edit Pendaftaran LKP')

@section('content')
<h4 class="fw-semibold text-success mb-3">Edit Pendaftaran LKP</h4>

<form action="{{ route('lkp.update', $lkp->id) }}" method="POST">
@csrf @method('PUT')

<div class="mb-3">
    <label class="form-label">Nama Program</label>
    <input type="text" name="program" value="{{ $lkp->program}}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Nama Peserta</label>
    <input type="text" name="name" value="{{ $lkp->name }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Kontak</label>
    <input type="text" name="whatsapp" value="{{ $lkp->whatsapp }}" class="form-control" required>
</div>

<div class="mb-3">
    <label class="form-label">Alamat</label>
    <textarea name="address" class="form-control">{{ $lkp->address }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Status</label>
    <select name="status_pendaftaran" class="form-select">
        <option value="pending" {{ $lkp->status_pendaftaran=='pending'?'selected':'' }}>Pending</option>
        <option value="diterima" {{ $lkp->status_pendaftaran=='diterima'?'selected':'' }}>Diterima</option>
        <option value="ditolak" {{ $lkp->status_pendaftaran=='ditolak'?'selected':'' }}>Ditolak</option>
    </select>
</div>

<button class="btn btn-success">Update</button>
<a href="{{ route('lkp.index') }}" class="btn btn-secondary">Kembali</a>

</form>
@endsection
