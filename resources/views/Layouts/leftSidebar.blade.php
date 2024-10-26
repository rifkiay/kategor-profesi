    <!-- ========== Left Sidebar Start ========== -->
    <div class="leftside-menu">

        <!-- Brand Logo Light -->
        <a href="{{ url('/') }}" class="logo logo-light">
            <span class="logo-lg">
                <img src="{{asset('assets')}}/images/logo.png" alt="logo">
            </span>
            <!-- <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="small logo">
                </span> -->
        </a>

        <!-- Brand Logo Dark -->
        <a href="{{ url('/') }}" class="logo logo-dark">
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="dark logo">
            </span>
            <!-- <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="small logo">
                </span> -->
        </a>

        <!-- Sidebar -left -->
        <div class="h-100" id="leftside-menu-container" data-simplebar>
            <!--- Sidemenu -->
            <ul class="side-nav">

                <li class="side-nav-title">Utama</li>

                <li class="side-nav-item">
                    <a href="{{ url('/') }}" class="side-nav-link">
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
                                <a href="{{ url('/Perusahaan/show') }}">Data Perusahaan</a>
                            </li>
                            <li>
                                <a href="{{ url('/Perusahaan/create') }}">Tambah Perusahaan</a>
                            </li>
                            <li>
                                <a href="{{ url('/Perusahaan/update') }}">Update Perusahaan</a>
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
                                <a href="{{ url('/profesi/show') }}">Data Profesi</a>
                            </li>
                            <li>
                                <a href="{{ url('/profesi/create') }}">Tambah Profesi</a>
                            </li>
                            <li>
                                <a href="{{ url('/profesi/update') }}">Update Profesi</a>
                            </li>

                        </ul>
                    </div>
                </li>

                <!-- Pekerjaan -->
                <li class="side-nav-item">
                    <a data-bs-toggle="collapse" href="#sidebarPagesAuth" aria-expanded="false" aria-controls="sidebarPagesAuth" class="side-nav-link">
                        <i class="ri-briefcase-line"></i>
                        <span> Pekerjaan </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarPagesAuth">
                        <ul class="side-nav-second-level">
                            <li>
                                <a href="{{ url('/job/show') }}">Data Pekerjaan</a>
                            </li>
                            <li>
                                <a href="{{ url('/job/create') }}">Tambah Pekerjaan</a>
                            </li>
                            <li>
                                <a href="{{ url('/job/update') }}">Update Pekerjaan</a>
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
                                <a href="{{ url('/user') }}">Data Pengguna</a>
                            </li>

                        </ul>
                    </div>
                </li>

            </ul>
            <!--- End Sidemenu -->

        </div>
    </div>
    <!-- ========== Left Sidebar End ========== -->