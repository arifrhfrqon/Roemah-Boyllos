<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Admin MBG</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f5f6fa;
            overflow-x: hidden;
        }

        #sidebar {
            position: fixed;
            top: 0; left: 0;
            width: 250px;
            height: 100vh;
            background: linear-gradient(180deg, #157347, #198754);
            color: white;
            transition: transform 0.4s ease;
            z-index: 200;
            overflow-y: auto;
        }

        #sidebar.closed { transform: translateX(-100%); }
        .content { margin-left: 250px; padding: 30px; transition: margin-left 0.4s ease; }
        .content.full { margin-left: 0 !important; }

        @media (max-width: 992px) {
            #sidebar { transform: translateX(-100%); }
            #sidebar.show { transform: translateX(0); }
            .content { margin-left: 0 !important; }
        }

        .topbar {
            background: white;
            border-bottom: 1px solid #dee2e6;
            padding: 10px 25px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 150;
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }

        .btn-toggle { background: none; border: none; font-size: 1.6rem; color: #157347; cursor: pointer; }

        .sidebar-link { display: block; padding: 10px 18px; color: #fff; text-decoration: none; transition: 0.2s; }
        .sidebar-link:hover, .sidebar-link.active { background: rgba(255,255,255,0.2); font-weight: 600; }
        .sidebar-link i { margin-right: 10px; }

        .sidebar-sublink { display: block; padding: 7px 34px; font-size: 14px; color: #e8e8e8; text-decoration: none; }
        .sidebar-sublink:hover, .sidebar-sublink.active { background: rgba(255,255,255,0.3); color: #fff; font-weight: 600; }

        footer { text-align: center; color: #6c757d; margin-top: 30px; font-size: 0.9rem; }
    </style>
</head>
<body>

<!-- SIDEBAR -->
<div id="sidebar">
    <h4 class="text-center py-3"><i class="bi bi-leaf"></i> Dashboard Admin</h4>

    <!-- Dashboard -->
    <a href="{{ route('admin.dashboard') }}" 
       class="sidebar-link {{ request()->is('admin/dashboard') ? 'active' : '' }}">
       <i class="bi bi-house-door"></i> Dashboard
    </a>

    <!-- Manajemen LKP (Dropdown) -->
    <div class="sidebar-dropdown">
        <a href="#lkpMenu"
           class="sidebar-link d-flex justify-content-between align-items-center {{ request()->is('admin/lkp*') || request()->is('admin/program*') ? 'active' : '' }}"
           data-bs-toggle="collapse"
           aria-expanded="{{ request()->is('admin/lkp*') || request()->is('admin/program*') ? 'true' : 'false' }}"
           aria-controls="lkpMenu">
            <span><i class="bi bi-mortarboard"></i> Manajemen LKP</span>
            <i class="bi bi-chevron-down small"></i>
        </a>
        <div class="collapse {{ request()->is('admin/lkp*') || request()->is('admin/program*') ? 'show' : '' }}" id="lkpMenu">
            <a href="{{ route('lkp.index') }}" class="sidebar-sublink {{ request()->is('admin/lkp*') ? 'active' : '' }}">
                <i class="bi bi-people"></i> Peserta LKP
            </a>
            <a href="{{ route('program.index') }}" class="sidebar-sublink {{ request()->is('admin/program*') ? 'active' : '' }}">
                <i class="bi bi-list-task"></i> Program LKP
            </a>
        </div>
    </div>

    <!-- Manajemen Produk (Dropdown) -->
    <div class="sidebar-dropdown">
        <a href="#produkMenu"
           class="sidebar-link d-flex justify-content-between align-items-center {{ request()->is('admin/products*') ? 'active' : '' }}"
           data-bs-toggle="collapse"
           aria-expanded="{{ request()->is('admin/products*') ? 'true' : 'false' }}"
           aria-controls="produkMenu">
            <span><i class="bi bi-bag"></i> Manajemen Produk</span>
            <i class="bi bi-chevron-down small"></i>
        </a>
        <div class="collapse {{ request()->is('admin/products*') ? 'show' : '' }}" id="produkMenu">
            <a href="{{ route('products.index') }}" class="sidebar-sublink {{ request()->is('admin/products') ? 'active' : '' }}">
                <i class="bi bi-box-seam"></i> Produk
            </a>
        </div>
    </div>

    </div>

    <!-- Logout -->
    <a href="{{ route('logout') }}" class="sidebar-link">
        <i class="bi bi-box-arrow-right"></i> Logout
    </a>
</div>


<!-- MAIN CONTENT -->
<div class="content" id="mainContent">
    <div class="topbar">
        <button class="btn-toggle" id="toggleSidebar"><i class="bi bi-list"></i></button>
        <h5 class="mb-0">Panel Admin</h5>
        <div>
            <i class="bi bi-bell me-3 text-secondary"></i>
            <i class="bi bi-person-circle text-secondary"></i>
        </div>
    </div>

    <div class="container-fluid mt-4">
        @yield('content')
    </div>

    <footer>
        <p>© 2025 Roemah Boyllos | CV Nadhifa 3 Bersaudara</p>
    </footer>
</div>

<div id="overlay" style="
    display:none; position:fixed; top:0; left:0;
    width:100%; height:100%; background:rgba(0,0,0,0.4);
    z-index:150;">
</div>

<!-- SCRIPTS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const toggleBtn = document.getElementById('toggleSidebar');
    const sidebar = document.getElementById('sidebar');
    const mainContent = document.getElementById('mainContent');
    const overlay = document.getElementById('overlay');

    toggleBtn.addEventListener('click', () => {
        if(window.innerWidth <= 992){
            sidebar.classList.toggle('show');
            overlay.style.display = sidebar.classList.contains('show') ? 'block' : 'none';
        } else {
            sidebar.classList.toggle('closed');
            mainContent.classList.toggle('full');
        }
    });

    overlay.addEventListener('click', () => {
        sidebar.classList.remove('show');
        overlay.style.display = 'none';
    });
</script>

</body>
</html>
