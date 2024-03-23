<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item sidebar-category">
            <p>Menu</p>
            <span></span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/dashboard">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        @if(Auth()->User()->level == 'Admin')
        <li class="nav-item">
            <a class="nav-link" href="/user">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">Kelola Data User</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/member">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">Kelola Data Member</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/supplier">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">Kelola Data Supplier</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/sepatu">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">Kelola Data Sepatu</span>
            </a>
        </li>
        @endif
        @if(Auth()->User()->level == 'Admin' || Auth()->User()->level == 'Kasir')
        <li class="nav-item">
            <a class="nav-link" href="/penjualan">
                <i class="mdi mdi-view-quilt menu-icon"></i>
                <span class="menu-title">Kelola Data Penjualan</span>
            </a>
        </li>
        @endif
    </ul>
</nav>