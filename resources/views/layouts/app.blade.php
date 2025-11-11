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
            border: none; /* hilang agar tidak ganggu */
        }
    }
    </style>
</head>
<body>

    {{-- Navbar --}}
    @include('layouts.partials.navbar')

    {{-- Hero --}}
    @yield('content')


    {{-- Footer --}}
    @include('layouts.partials.footer')

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
