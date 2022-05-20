@section('sidebar')
    <!-- MENU SIDEBAR-->
    <aside class="menu-sidebar d-none d-lg-block">
        <div class="logo">
            <a href="/home"><h2>Jaya Laundry</h2>
            </a>
        </div>
        <div class="menu-sidebar__content js-scrollbar1">
            <nav class="navbar-sidebar">
                <ul class="list-unstyled navbar__list">
                    <li>
                        <a href="/home">
                            <i class="fas fa-chart-bar"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="/jenisLayanan">
                            <i class="fas fa-chart-bar"></i>Jenis Layanan</a>
                    </li>
                    <li>
                        <a href="/paket">
                            <i class="fas fa-chart-bar"></i>Paket Laundry</a>
                    </li>
                    <li>
                        <a href="/customer">
                            <i class="fas fa-table"></i>Customer</a>
                    </li>
                    <li>
                        <a href="/admin">
                            <i class="far fa-check-square"></i>Admin</a>
                    </li>
                    <li>
                        <a href="/statusPesanan">
                            <i class="fas fa-calendar-alt"></i>Status pesanan</a>
                    </li>
                    <li>
                        <a href="/statusPembayaran">
                            <i class="fas fa-map-marker-alt"></i>Status pembayaran</a>
                    </li>
                    <li>
                        <a href="/transaksi">
                            <i class="fas fa-map-marker-alt"></i>Transaksi Pesanan</a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
@endsection
