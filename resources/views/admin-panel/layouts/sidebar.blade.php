<div class="main-sidebar sidebar-style-2 irounded-1 shadow" tabindex="0">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="#">PP SHOLAWAT</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="#"></a>
        </div>
        <ul class="sidebar-menu">

            <!-- Dashboard -->
            <li class="menu-header">Home</li>
            <li class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a aria-label="vanrsin" class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-home"></i> <span>Dashboard</span>
                </a>
            </li>

            <li class="menu-header">Kelola Data</li>

            <!-- Data -->
            <li class="nav-item dropdown {{ request()->routeIs('#', '#', 'level-pelanggaran.index', 'klasisfikasi-violasi.index') ? 'active' : '@endif' }}">
                <a aria-label="skost" href="#" class="nav-link has-dropdown"><i
                        class="fas fa-server"></i><span>Data Sistem</span></a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('#') ? 'active' : '' }}">
                        <a class="nav-link" href="#">Izin</a>
                    </li>
                    <li class="{{ request()->routeIs('#') ? 'active' : '' }}">
                        <a class="nav-link" href="#">Kelas Madrasah</a>
                    </li>
                    <li class="{{ request()->routeIs('level-pelanggaran.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('level-pelanggaran.index') }}">Level Pelanggaran</a>
                    </li>
                    <li class="{{ request()->routeIs('klasisfikasi-violasi.index') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('klasisfikasi-violasi.index') }}">Klasifikasi Violasi</a>
                    </li>
                </ul>
            </li>

            <!-- Data Santri -->
            <li class="{{ request()->routeIs('santri') ? 'active' : '' }}">
                <a aria-label="vanrsin" class="nav-link" href="#">
                    <i class="fas fa-user"></i> <span>Data Santri</span>
                </a>
            </li>

            <!-- Data Pengguna -->
            <li class="{{ request()->routeIs('pengguna') ? 'active' : '' }}">
                <a aria-label="vanrsin" class="nav-link" href="#">
                    <i class="fas fa-user-tie"></i> <span>Data Pengguna</span>
                </a>
            </li>

            <li class="menu-header">Sistem</li>

            <!-- Perizinan Santri -->
            <li class="nav-item dropdown {{ request()->routeIs('#', '#', '#', '#') ? 'active' : '' }}">
                <a aria-label="skost" href="#" class="nav-link has-dropdown">
                    <i class="fas fa-file-signature" style="color: #0b9640;"></i><span> Perizinan </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('#') ? 'active' : '' }}">
                        <a class="nav-link" href="#">Input Izin</a>
                    </li>
                    <li class="{{ request()->routeIs('#') ? 'active' : '' }}">
                        <a class="nav-link" href="#">Laporan Izin</a>
                    </li>
                </ul>
            </li>

            <!-- Pelanggaran Santri -->
            <li class="nav-item dropdown {{ request()->routeIs('#', '#', '#', '#') ? 'active' : '' }}">
                <a aria-label="skost" href="#" class="nav-link has-dropdown">
                    <i class="fas fa-user-times" style="color: #dc3545;"></i><span> Pelanggaran</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ request()->routeIs('#') ? 'active' : '' }}">
                        <a class="nav-link" href="#">Input Pelanggaran</a>
                    </li>
                    <li class="{{ request()->routeIs('#') ? 'active' : '' }}">
                        <a class="nav-link" href="#">Laporan Harian</a>
                    </li>
                    <li class="{{ request()->routeIs('#') ? 'active' : '' }}">
                        <a class="nav-link" href="#">Laporan Bulanan</a>
                    </li>
                </ul>
            </li>

        </ul>
    </aside>
</div>
