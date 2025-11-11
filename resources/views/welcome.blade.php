@extends('layouts.app')

@section('title', 'Beranda')

<section class="hero" id="home">
        <div class="text-center">
            <h1 class="fw-bold display-4" data-aos="fade-up">
                Pusat Pengembangan & Pemasaran <br>
                <span class="text-warning">Produk Agribisnis</span>
            </h1>
            <p class="lead mt-3 mb-3 typing-text">Memberdayakan Petani, UMKM, dan Komunitas untuk Bertumbuh Bersama</p>
            <a href="#produk" class="btn btn-success btn-lg mt-4" data-aos="zoom-in">Lihat Produk Unggulan</a>
        </div>
    </section>

    {{-- Tentang Kami --}}
    <section id="tentang" class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6" data-aos="fade-right">
                    <img src="{{ asset('images/about.jpg') }}" alt="Tentang Kami" class="img-fluid rounded shadow">
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <h2 class="section-title text-success">Siapa Kami</h2>
                    <p>Roemah Boyllos merupakan unit pengembangan agribisnis yang berfokus pada **pemberdayaan petani lokal**, pengolahan hasil pertanian, dan pemasaran produk unggulan melalui jaringan kemitraan berkelanjutan.</p>
                    <p>Kami berkomitmen menghadirkan **produk berkualitas**, proses produksi yang **bertanggung jawab**, serta kerja sama yang **berorientasi kemajuan bersama**.</p>
                </div>
            </div>
        </div>
    </section>

    {{-- Bidang Usaha --}}
    <section id="bidang" class="bg-light py-5">
        <div class="container text-center">
            <h2 class="section-title text-success" data-aos="fade-up">Fokus Pengembangan</h2>
            <div class="row mt-4">

                <div class="col-md-4 mb-4" data-aos="zoom-in">
                    <div class="card h-100">
                        <img src="{{ asset('images/pemasaran.jpg') }}" class="card-img-top" alt="Pemasaran Produk">
                        <div class="card-body">
                            <h5 class="card-title">Pemasaran Produk</h5>
                            <p>Kami membantu produk pertanian lokal memasuki pasar yang lebih luas dengan strategi branding & distribusi efektif.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
                    <div class="card h-100">
                        <img src="{{ asset('images/olahan.jpg') }}" class="card-img-top" alt="Pengolahan Nilai Tambah">
                        <div class="card-body">
                            <h5 class="card-title">Pengolahan Nilai Tambah</h5>
                            <p>Mendukung inovasi pengolahan agar hasil pertanian memiliki daya saing tinggi dan nilai ekonomi lebih baik.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
                    <div class="card h-100">
                        <img src="{{ asset('images/pelatihan.jpg') }}" class="card-img-top" alt="Pelatihan & Pengembangan">
                        <div class="card-body">
                            <h5 class="card-title">Pelatihan & Inkubasi</h5>
                            <p>Program peningkatan kompetensi untuk petani, UMKM, dan generasi muda yang ingin berkembang di sektor agribisnis.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- Produk --}}
    <section id="produk" class="py-5">
        <div class="container text-center">
            <h2 class="section-title text-success" data-aos="fade-up">Produk Unggulan Kami</h2>
            <p>Mulai dari komoditas segar, olahan pangan, hingga produk turunan bernilai jual tinggi.</p>

            <a href="/katalog" class="btn btn-warning mt-3" data-aos="zoom-in">Lihat Katalog Produk</a>
        </div>
    </section>

    {{-- LKP --}}
    <section id="lkp" class="bg-light py-5">
        <div class="container text-center" data-aos="fade-up">
            <h2 class="section-title text-success">LKP - Roemah Boyllos</h2>
            <p class="mt-3">
                Kami menyediakan program pelatihan pertanian modern, peningkatan skill petani muda,
                pendampingan UMKM, serta pengembangan usaha berbasis agribisnis. 
                Kami percaya kolaborasi dan peningkatan kapasitas adalah kunci bertumbuh bersama.
            </p>

            <div class="row mt-4 g-4 justify-content-center">

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="fw-bold text-success">Pelatihan Pertanian Modern</h5>
                            <p class="text-muted">Pendampingan teknis budidaya, manajemen lahan, dan efisiensi produksi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="fw-bold text-success">Program Pengembangan UMKM</h5>
                            <p class="text-muted">Pembinaan, sertifikasi usaha, pemasaran produk, dan peningkatan kualitas.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm border-0">
                        <div class="card-body">
                            <h5 class="fw-bold text-success">Kemitraan & Inkubasi Bisnis</h5>
                            <p class="text-muted">Kesempatan kolaborasi jangka panjang dengan pendekatan “Growth Together”.</p>
                        </div>
                    </div>
                </div>

            </div>

            <a href="{{ route('lkp.daftar') }}"
            class="btn btn-success mt-4 px-4 py-2 fw-semibold rounded-pill">
                Hubungi / Daftar LKP <i class="bi bi-pencil-square"></i>
            </a>
        </div>
    </section>


    {{-- Kontak --}} 
    <section id="kontak" class="py-5"> 
        <div class="container text-center" data-aos="fade-up"> 
            <h2 class="section-title text-success">Kontak Kami</h2> 
            <p class="text-center mb-4">Tumbuh bersama. Berkolaborasi untuk kebaikan bersama.</p>

            <div class="text-center">
            <a href="https://wa.me/6282247400481"
                class="btn btn-success rounded-pill px-4 py-2 fw-semibold"
                target="_blank"
                rel="noopener noreferrer">
                Chat via WhatsApp
            </a>
        </div>

        </div> 
    </section> 

    <section id="lokasi" class="py-5"> 
        <div class="container text-center" data-aos="fade-up"> 
            <h2 class="section-title text-success">Lokasi Kami</h2> 
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.237117668191!2d110.5990527748417!3d-7.549102092464514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a69000e729ea7%3A0x2d354e353fb4d69c!2sROEMAH%20BOYLLOS!5e0!3m2!1sen!2sid!4v1762392559922!5m2!1sen!2sid" 
                width="100%" 
                height="200" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade"> 
            </iframe> 
        </div> 
    </section>
</section>
@section('content')