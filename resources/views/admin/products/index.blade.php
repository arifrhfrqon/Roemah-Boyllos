@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead class="table-success text-center">
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $p)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $p->name }}</td>
                <td>{{ $p->category }}</td>
                <td>{{ $p->price ? 'Rp '.number_format($p->price,0,',','.') : '-' }}</td>
                <td>@if($p->image)<img src="{{ asset($p->image) }}" width="60">@endif</td>
                <td>
                    <a href="{{ route('products.edit',$p->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('products.destroy',$p->id) }}" method="POST" class="d-inline">
                        @csrf @method('DELETE')
                        <button onclick="return confirm('Hapus produk ini?')" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
