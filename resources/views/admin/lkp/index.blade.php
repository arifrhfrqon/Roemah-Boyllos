@extends('admin.layout')

@section('title', 'Manajemen Pendaftaran LKP')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h4 class="fw-semibold text-success"><i class="bi bi-mortarboard"></i> Data Pendaftaran LKP</h4>
    <a href="{{ route('lkp.create') }}" class="btn btn-success btn-sm">
        <i class="bi bi-plus-circle"></i> Tambah Pendaftaran
    </a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table table-bordered table-striped">
    <thead class="table-success text-center">
        <tr>
            <th>No</th>
            <th>Nama Peserta</th>
            <th>Email</th>
            <th>Kontak</th>
            <th>Program Pelatihan</th>
            <th>Alamat</th>
            <th>Status</th>
            <th width="130">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $item)
        <tr>
            <td class="text-center">{{ $loop->iteration }}</td>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->whatsapp }}</td>
            <td>{{ $item->program }}</td>
            <td>{{ $item->address }}</td>
            <td class="text-center">
                @php
                    $status = strtolower($item->status_pendaftaran);
                @endphp
                <span class="badge bg-{{ $status == 'diterima' ? 'success' : ($status == 'ditolak' ? 'danger' : 'secondary') }}">
                    {{ ucfirst($status) }}
                </span>
            </td>
            <td class="text-center">
                <a href="{{ route('lkp.edit', $item->id) }}" class="btn btn-warning btn-sm">
                    <i class="bi bi-pencil"></i>
                </a>
                <form action="{{ route('lkp.destroy', $item->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Hapus data ini?')" class="btn btn-danger btn-sm">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
