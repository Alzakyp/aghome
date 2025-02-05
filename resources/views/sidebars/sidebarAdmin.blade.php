<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <!-- <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo text-center ">
                    <div class="avatar avatar-lg mx-auto d-block mt-1">
                        <img src="{{ asset('assets/images/faces/2.jpg') }}" alt="" srcset="" style="width: 30%; height: 30%; object-fit: cover;">
                    </div>
                    <p class="mt-3 fs-6">Anak Lanang E Ibuk</p> 
                </div>
            </div>
        </div>   -->
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu Admin</li>

                <li class="sidebar-item has-sub  {{ request()->is('mahasiswa','mahasiswa-view') ? 'active' : '' }}">
                    <a href="index.html" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>Kelola Produk</span>
                    </a>
                    <ul class="submenu ">
                        <li class="submenu-item  {{ request()->is('tambah-produk') ? 'active' : '' }}">
                            <a href="{{  url('tambah-produk ')   }}">Tambah Produk</a>
                        </li>
                        <li class="submenu-item  {{ request()->is('kelola-produk') ? 'active' : '' }}">
                            <a href="{{  url('kelola-produk')   }}">Lihat Produk</a>
                        </li>
                    </ul>
            </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>