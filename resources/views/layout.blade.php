<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Roemah Boyllos | CV Nadhifa Tiga Bersaudara</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    {{-- Google Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            scroll-behavior: smooth;
        }

        .navbar-nav .nav-link {
            color: #ffc107 !important; /* kuning */
            font-weight: 500;
            transition: all 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            color: #9ef01a !important; /* hijau muda */
            transform: scale(1.05);
        }

        .navbar.scrolled {
            background-color: #fff !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }

        .hero {
            height: 90vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)),
                        url('{{ asset("images/hero.jpg") }}') center/cover no-repeat;
            color: #fff;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.6);
        }

        .typing-text {
            border-right: 3px solid #fff;
            white-space: nowrap;
            overflow: hidden;
            display: flex;
            animation: typing 4s steps(40, end), blink 0.75s step-end infinite;
        }
        @keyframes typing { from { width: 0; } to { width: 100%; } }
        @keyframes blink { 50% { border-color: transparent; } }

        .section-title {
            font-weight: 700;
            text-transform: uppercase;
            margin-bottom: 1.5rem;
        }

        .card:hover {
            transform: translateY(-5px);
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0,0,0,0.15);
        }

        footer {
            background-color: #1b5e20;
            color: white;
            padding: 30px 0;
        }
        footer a {
            color: #ffeb3b;
            text-decoration: none;
        }

    @media (max-width: 768px) {
        .hero {
            padding: 30px 10px;
            min-height: 80vh;
        }

        .hero h1 {
            font-size: 1.7rem;
        }

        .typing-text {
            font-size: 0.9rem;
        }

        .about img,
        .programs img {
            width: 100%;
            height: auto;
            display: block;
        }

        section {
            padding: 50px 15px !important;
        }
    }

    @media (max-width: 480px) {
        .hero {
            min-height: 70vh;
        }
        .hero h1 {
            font-size: 1.4rem;
        }
        .typing-text {
            border: none; 
        }
    }
    </style>
</head>
<body>

    {{-- Navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold text-warning" href="#">Roemah Boyllos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#tentang">Tentang</a></li>
                    <li class="nav-item"><a class="nav-link" href="#bidang">Bidang Usaha</a></li>
                    <li class="nav-item"><a class="nav-link" href="#visi">Visi & Misi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#mitra">Kemitraan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="text-center mt-4">
        <div class="container">
            <p>&copy; {{ date('Y') }} Roemah Boyllos  | CV Nadhifa Tiga Bersaudara</p>
            <small>Dibuat oleh Tim Pengembang</small>

            <div class="mt-3">
                <h6>Lokasi Kami:</h6>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.237117668191!2d110.5990527748417!3d-7.549102092464514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a69000e729ea7%3A0x2d354e353fb4d69c!2sROEMAH%20BOYLLOS!5e0!3m2!1sen!2sid!4v1762392559922!5m2!1sen!2sid" 
                    width="100%" 
                    height="200" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </footer>


    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({ duration: 1000, once: true });

        window.addEventListener("scroll", () => {
            const nav = document.querySelector(".navbar");
            if (window.scrollY > 80) {
                nav.classList.add("scrolled");
            } else {
                nav.classList.remove("scrolled");
            }
        });

        document.querySelectorAll('a[href^="#"]').forEach(link => {
            link.addEventListener("click", function(e) {
                e.preventDefault();
                document.querySelector(this.getAttribute("href")).scrollIntoView({
                    behavior: "smooth"
                });
            });
        });
    </script>
</body>
</html>
