@extends('admin.layout')

@section('title','Program LKP')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h4>Daftar Program LKP</h4>
    <a href="{{ route('program.create') }}" class="btn btn-success">
        <i class="bi bi-plus-circle"></i> Tambah Program LKP
    </a>
</div>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="table-success text-center">
            <tr>
                <th>#</th>
                <th>Nama LKP</th>
                <th>Deskripsi</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Telepon</th>
                <th>Fitur</th>
                <th>Nama Program</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($programs as $index => $p)
            <tr>
                <td class="text-center">{{ $index + 1 }}</td>
                <td>{{ $p->nama_lkp }}</td>
                <td>{{ $p->deskripsi }}</td>
                <td>{{ $p->alamat }}</td>
                <td>{{ $p->email }}</td>
                <td>{{ $p->phone }}</td>
                <td>{{ $p->fitur }}</td>
                <td>{{ $p->program_name }}</td>
                <td>
                    @if($p->foto)
                        <img src="{{ asset($p->foto) }}" width="50" alt="Foto">
                    @endif
                </td>
                <td class="text-center">
                    <a href="{{ route('program.edit',$p->id) }}" class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i></a>
                    <form action="{{ route('program.destroy',$p->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin hapus?');">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash"></i></button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="10" class="text-center">Belum ada data.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
