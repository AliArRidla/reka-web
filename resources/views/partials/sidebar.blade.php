<div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/home">REKAINDO GLOBAL JASA</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/home">REKA</a>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="/home" class="nav-link"><i class="fas fa-fire"></i><span>Dashboard</span></a>
            </li>
            <li class="menu-header">Menu</li>
            <li class="nav-item dropdown">
                <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>Mesin</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ URL::to('machines') }}">Daftar Mesin</a></li>
                    <li><a class="nav-link" href="{{ URL::to('machines/create') }}">Tambah Data Mesin</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a href="" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-columns"></i>
                    <span>User Admin</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="{{ URL::to('users') }}">Daftar Users</a></li>
                    <li><a class="nav-link" href="../users/create">Tambah Users</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="../history/history" class="nav-link"><i class="fas fa-columns"></i>
                    <span>History</span></a>
            </li>
        </ul>
    </aside>
</div>
