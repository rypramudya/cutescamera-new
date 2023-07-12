<aside id="sidebar" class="sidebar bg-white">

    <ul class="sidebar-nav" id="sidebar-nav">
        <li class="menu-title">Admin</li>
        <li class="nav-item ">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="bi bi-laptop"></i>
                <span>Dashboard</span>
            </a>
        </li>
        <li class="nav-item ">
            <a class="nav-link"  href="{{ route('tampil-admin') }}">
                <i class="bi bi-person-lines-fill"></i>
                <span>Daftar Admin</span>
            </a>
        </li>
        <hr class="sidebar-divider">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="menu-title">User</li>
            <li class="nav-item">
                <a class="nav-link " href="{{ route('edit-profile') }}">
                    <i class="bi bi-person-vcard"></i>
                    <span>Edit Profile</span>
                </a>
            </li>
            <ul class="sidebar-nav" id="sidebar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('edit-password') }}">
                        <i class="bi bi-key"></i>
                        <span>Ubah Password</span>
                    </a>
                </li>
                <hr class="sidebar-divider">
                <ul class="sidebar-nav" id="sidebar-nav">
                    <li class="menu-title">Customer</li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('tampil-customer') }}">
                            <i class="bi bi-people"></i>
                            <span>Data Customer</span>
                        </a>
                    </li>
                    <hr class="sidebar-divider">
                    <ul class="sidebar-nav" id="sidebar-nav">
                        <li class="menu-title">Transaksi</li>
                        <li class="nav-item">
                            <a class="nav-link " href= " {{ route('peminjaman.index') }} " >
                                <i class="bi bi-arrow-down-circle"></i>
                                <span>Peminjaman</span>
                            </a>
                        </li>
                        <ul class="sidebar-nav" id="sidebar-nav">
                                <hr class="sidebar-divider">
                                <ul class="sidebar-nav" id="sidebar-nav">
                                    <li class="menu-title">Produk</li>
                                    <li class="nav-item">
                                        <a class="nav-link " href=" {{ route('kamera.index') }} ">
                                            <i class="bi bi-table"></i>
                                            <span>Data Produk</span>
                                        </a>
                                    </li>
                                    <hr class="sidebar-divider">
                                    <ul class="sidebar-nav" id="sidebar-nav">
                                        <li class="menu-title">Transaksi</li>
                                        <li class="nav-item">
                                            <a class="nav-link " href="#">
                                                <i class="bi bi-book"></i>
                                                <span>Laporan Transaksi</span>
                                            </a>
                                        </li>
                                        <hr class="sidebar-divider">
                                        <ul class="sidebar-nav" id="sidebar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link " href="{{ route('actionlogout') }}">
                                                    <i class="bi bi-power"></i>
                                                    <span>Log Out</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </ul>
                                </ul>
                            </ul>
                        </ul>
                    </ul>
                </ul>
            </ul>
        </ul>
</aside>
