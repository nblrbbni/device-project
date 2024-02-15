<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html"> <span class="logo-name">Admin</span> </a>
        </div>
        <ul class="sidebar-menu">
            <li class="dropdown {{ Request::is('admin/dashboard*') ? 'active' : '' }}">
                <a href="/admin/dashboard" class="nav-link">
                    <i class="fas fa-home"></i>
                    <span>Dashboard</span></a>
            </li><br>
            <li class="dropdown {{ Request::is('student*') ? 'active' : '' }}">
                <a href="/student" class="nav-link">
                    <i class="fas fa-address-book"></i>
                    <span>Siswa</span></a>
            </li><br>
            <li class="dropdown {{ Request::is('data-device*') ? 'active' : '' }}">
                <a href="/data-device" class="nav-link">
                    <i class="fas fa-laptop"></i>
                    <span>Device</span></a>
            </li><br>
            <li class="dropdown {{ Request::is('mapel*') ? 'active' : '' }}">
                <a href="/mapel" class="nav-link">
                    <i class="fas fa-book-open"></i>
                    <span>Mapel</span></a>
            </li><br>
            <li class="dropdown {{ Request::is('guru*') ? 'active' : '' }}">
                <a href="/guru" class="nav-link">
                    <i class="fas fa-users"></i>
                    <span>Guru</span></a>
            </li><br>
            <li class="dropdown {{ Request::is('categories*') ? 'active' : '' }}">
                <a href="/categories" class="nav-link">
                    <i class="fas fa-th"></i>
                    <span>Kategori</span></a>
            </li><br>
            <li class="dropdown {{ Request::is('information/show*') ? 'active' : '' }}">
                <a href="/information/show" class="nav-link">
                    <i class="fas fa-exclamation-triangle"></i>
                    <span>Peraturan</span></a>
            </li><br>
            <li class="dropdown {{ Request::is('laporan*') ? 'active' : '' }}">
                <a href="/laporan" class="nav-link">
                    <i class="far fa-file"></i>
                    <span>Laporan pengembalian</span></a>
            </li>
        </ul>
    </aside>
</div>
