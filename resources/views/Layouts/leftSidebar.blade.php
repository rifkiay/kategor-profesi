<!-- ========== Left Sidebar Start ========== -->
<div class="leftside-menu">

    <!-- Brand Logo Light -->
    <a href="{{ url('/admin/dashboard') }}" class="logo logo-light">
        <span class="logo-lg">
        <img src="{{ asset('Assets/images/logo-light.png') }}" alt="Logo" class="logo-light" />
        </span>
        <span class="logo-sm">
            <img src="{{ asset('Assets/images/logo-sm.png') }}" alt="small logo">
        </span>
    </a>

    <!-- Brand Logo Dark -->
    <!-- <a href="{{ url('/') }}" class="logo logo-dark">
        <span class="logo-lg">
            <img src="assets/images/logo-dark-utama.png" alt="dark logo">
        </span> -->
        <!-- <span class="logo-sm">
            <img src="assets/images/logo-sm.png" alt="small logo">
        </span> -->
    <!-- </a> -->

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title">Utama</li>

            <li class="side-nav-item">
                <a href="{{ url('/admin/dashboard') }}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span> Dashboard </span>
                </a>
            </li>

            <!-- Perusahaan -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                    <i class="ri-building-2-fill"></i>
                    <span> Perusahaan </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPages">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('perusahaan.index') }}">Data Perusahaan</a>
                        </li>
                        <li>
                            <a href="{{ route('perusahaan.create') }}">Tambah Perusahaan</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Profesi -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                    <i class="ri-flower-fill"></i>
                    <span> Profesi </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPagesAuth">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('profesi.view') }}">Data Profesi</a>
                        </li>
                        <li>
                            <a href="{{ route('profesi.create') }}">Tambah Profesi</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Kategori Profesi -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                    <i class="ri-book-read-fill"></i>
                    <span> Kategori Profesi </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPagesAuth">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('kategori_profesi.view') }}">Data Kategori Profesi</a>
                        </li>
                        <li>
                            <a href="{{ route('kategori_profesi.create') }}">Tambah Kategori Profesi</a>
                        </li>

                    </ul>
                </div>
            </li>

            <!-- Loker -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                    <i class="ri-briefcase-line"></i>
                    <span> Lowongan Pekerjaan </span>
                    <span class="menu-arrow "></span>
                </a>
                <div class="collapse" id="sidebarPagesAuth">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('lokeradmin.index') }}">Data Loker</a>
                        </li>
                        <li>
                            <a href="{{ route('loker.create') }}">Tambah Loker</a>
                        </li>

                    </ul>
                </div>
            </li>

            <!-- Pengguna -->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                    <i class="ri-user-line"></i>
                    <span> Pengguna </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarPagesAuth">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('user.view') }}">Data Pengguna</a>
                        </li>

                    </ul>
                </div>
            </li>

        </ul>
        <!--- End Sidemenu -->

    </div>
</div>
<!-- ========== Left Sidebar End ========== -->