@extends('admin.layout')

@section('content')
<div class="container mt-4">
    <h4>Edit Produk</h4>

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
        </div>

        <div class="mb-3">
            <label>Kategori</label>
            <input type="text" name="category" class="form-control" value="{{ $product->category }}">
        </div>

        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="price" class="form-control" value="{{ $product->price }}">
        </div>

        <div class="mb-3">
            <label>Deskripsi</label>
            <textarea name="description" class="form-control">{{ $product->description }}</textarea>
        </div>

        <div class="mb-3">
            <label>Gambar Sekarang</label><br>
            @if($product->image)
                <img src="{{ asset($product->image) }}" width="120" class="rounded mb-2">
            @else
                <p class="text-muted">Belum ada gambar</p>
            @endif
        </div>

        <div class="mb-3">
            <label>Ganti Gambar (Opsional)</label>
            <input type="file" name="image" class="form-control">
        </div>

        <button class="btn btn-success">Perbarui</button>
        <a href="{{ route('products.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
