@extends('layouts.app')

@section('title', 'Katalog Produk')

@section('content')

<section class="py-5">
    <div class="container">
        <h3 class="fw-bold mb-4 text-success">
            <i class="bi bi-bag"></i> Katalog Produk UMKM Boyolali
        </h3>

        <div class="row g-4">

            @php
                $produk = [
                    ['nama'=>'Susu Sapi Segar', 'gambar'=>'https://via.placeholder.com/300x200', 'deskripsi'=>'Susu murni hasil peternakan Boyolali, kaya nutrisi & tanpa pengawet.'],
                    ['nama'=>'Yogurt Homemade', 'gambar'=>'https://via.placeholder.com/300x200', 'deskripsi'=>'Yogurt fermentasi alami dengan rasa creamy dan sehat.'],
                    ['nama'=>'Keju Lokal Boyolali', 'gambar'=>'https://via.placeholder.com/300x200', 'deskripsi'=>'Keju berkualitas hasil UMKM dengan cita rasa premium.'],
                    ['nama'=>'Keripik Singkong Pedas', 'gambar'=>'https://via.placeholder.com/300x200', 'deskripsi'=>'Camilan renyah dengan bumbu gurih & pedas nikmat.'],
                    ['nama'=>'Keju Lokal Boyolali', 'gambar'=>'https://via.placeholder.com/300x200', 'deskripsi'=>'Keju berkualitas hasil UMKM dengan cita rasa premium.'],
                    ['nama'=>'Keripik Singkong Pedas', 'gambar'=>'https://via.placeholder.com/300x200', 'deskripsi'=>'Camilan renyah dengan bumbu gurih & pedas nikmat.'],
                    ['nama'=>'Keju Lokal Boyolali', 'gambar'=>'https://via.placeholder.com/300x200', 'deskripsi'=>'Keju berkualitas hasil UMKM dengan cita rasa premium.'],
                    ['nama'=>'Keripik Singkong Pedas', 'gambar'=>'https://via.placeholder.com/300x200', 'deskripsi'=>'Camilan renyah dengan bumbu gurih & pedas nikmat.'],
                    ['nama'=>'Keju Lokal Boyolali', 'gambar'=>'https://via.placeholder.com/300x200', 'deskripsi'=>'Keju berkualitas hasil UMKM dengan cita rasa premium.'],
                    ['nama'=>'Keripik Singkong Pedas', 'gambar'=>'https://via.placeholder.com/300x200', 'deskripsi'=>'Camilan renyah dengan bumbu gurih & pedas nikmat.'],
                    ['nama'=>'Keju Lokal Boyolali', 'gambar'=>'https://via.placeholder.com/300x200', 'deskripsi'=>'Keju berkualitas hasil UMKM dengan cita rasa premium.'],
                    ['nama'=>'Keripik Singkong Pedas', 'gambar'=>'https://via.placeholder.com/300x200', 'deskripsi'=>'Camilan renyah dengan bumbu gurih & pedas nikmat.'],
                ];
            @endphp

            @foreach ($produk as $item)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card h-100 border-0 shadow-sm hover-card">
                    <img src="{{ $item['gambar'] }}" class="card-img-top" alt="{{ $item['nama'] }}">
                    <div class="card-body">
                        <h5 class="card-title fw-semibold">{{ $item['nama'] }}</h5>
                        <p class="card-text text-muted small">{{ $item['deskripsi'] }}</p>
                    </div>
                    <div class="card-footer bg-white border-0 text-center pb-3">
                        <a href="https://wa.me/6282247400481?text=Halo%20saya%20ingin%20pesan%20{{ urlencode($item['nama']) }}"
                           class="btn btn-success btn-sm rounded-pill px-3"
                           target="_blank"
                           rel="noopener noreferrer">
                            Pesan Sekarang <i class="bi bi-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

@endsection
