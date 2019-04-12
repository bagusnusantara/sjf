<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                    <img alt="image" class="img-circle" src="{{ asset('inspinia/img/admin.jpg') }}" />
                     </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                    <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{ Auth::user()->name }}</strong>
                    </span> <span class="text-muted text-xs block">{{ Auth::user()->user_type }}<b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li>
                          <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            <i class="material-icons">Logout</i>
                          </a>
                          <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none">
                            @csrf
                          </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    ISC
                </div>
            </li>
            @can('isAdmin')
            <li class="@if(url('/ManajemenUser') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('ManajemenUser')}}"><i class="fa fa-group"></i> <span class="nav-label">Manajemen User</span></span></a>
            </li>
            <li class="@if(url('/ManajemenOutletUser') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('ManajemenOutletUser')}}"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Manajemen Outlet Investor</span></span></a>
            </li>
            @endcan

            <li class="@if(url('/dashboard') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('dashboard')}}"><i class="fa fa-line-chart"></i> <span class="nav-label">Dashboard</span></span></a>
            </li>

            <li class="@if(url('/Laporan') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('Laporan')}}"><i class="fa fa-newspaper-o"></i> <span class="nav-label">Laporan</span></span></a>
            </li>

            <li class="@if(url('/MDBarang') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('PengajuanPembelian')}}"><i class="fa fa-sitemap"></i> <span class="nav-label">Katalog</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                        <li  class="@if(url('/MDBarang') == request()->url()
                           ) active @else '' @endif  treeview">
                           <a href="{{ url('MDBarang')}}">Produk</a></li>
                        <li class="@if(url('/MDGudang') == request()->url()
                           ) active @else '' @endif  treeview">
                            <a href="{{ url('MDGudang')}}">Stok</a></li>

                        <li class="@if(url('/MDGudang') == request()->url()
                           ) active @else '' @endif  treeview">
                        <a href="{{ url('MDGudang')}}">Tipe Spesial</a></li>
                        <li class="@if(url('/MDGudang') == request()->url()
                           ) active @else '' @endif  treeview">
                        <a href="{{ url('MDGudang')}}">Data Master</a></li>
                        <li class="@if(url('/MDGudang') == request()->url()
                           ) active @else '' @endif  treeview">
                        <a href="{{ url('MDGudang')}}">Paket Produk</a></li>
                </ul>
            </li>

            <li class="@if(url('/PengajuanPembelian') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('/pengajuanpembelian')}}"><i class="fa fa-paper-plane-o"></i> <span class="nav-label">Order Pembelian</span></span></a>
            </li>

            <li class="@if(url('/PenerimaanPO') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('PenerimaanPO')}}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Penerimaan PO</span></a>
            </li>

            <!-- <li class="@if(url('/Laporan') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('Laporan')}}"><i class="fa fa-sitemap"></i> <span class="nav-label">Laporan</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse">
                        <li  class="@if(url('/LaporanAllOutlet') == request()->url()
                           ) active @else '' @endif  treeview">
                           <a href="{{ url('LaporanAllOutlet')}}">Laporan Semua Outlet</a></li>
                        <li class="@if(url('/LaporanOutlet1') == request()->url()
                           ) active @else '' @endif  treeview">
                            <a href="{{ url('LaporanOutlet1')}}">Laporan Outlet 1</a></li>
                </ul>
            </li> -->

            @can('isPegawai')
            <li class="@if(url('/PengajuanPembelian') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('PengajuanPembelian')}}"><i class="fa fa-paper-plane-o"></i> <span class="nav-label">Order Pembelian</span></span></a>
            </li>
            <!-- <li class="@if(url('/PenyiapanBarang') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('PenyiapanBarang')}}"><i class="fa fa-paper-plane-o"></i> <span class="nav-label">Penyiapan Barang</span></span></a>
            </li> -->

            <li class="@if(url('/PenerimaanPO') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('PenerimaanPO')}}"><i class="fa fa-handshake-o"></i> <span class="nav-label">Penerimaan PO</span></a>
            </li>

            <li class="@if(url('/StokBarang') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('StokBarang')}}"><i class="fa fa-cubes"></i> <span class="nav-label">Stok Barang</span></a>
            </li>

            <li class="@if(url('/PenggunaanBarang') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('PenggunaanBarang')}}"><i class="fa fa-external-link"></i> <span class="nav-label">Penggunaan Barang</span></a>
            </li>
            @endcan
            <!-- <li class="@if(url('/kat') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('kat')}}"><i class="fa fa-search"></i> <span class="nav-label">Kategori</span></a>
            </li>

            <li class="@if(url('/bar') == request()->url()
               ) active @else '' @endif  treeview">
                <a href="{{ url('bar')}}"><i class="fa fa-search"></i> <span class="nav-label">Barang</span></a>
            </li> -->
        </ul>

    </div>
</nav>
