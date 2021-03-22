<div class="sidebar enigma-dark-bg-1 shadow">
  <div class="sidebar-inner">

    <!-- sidebar header -->
    <div class="sidebar-logo pY-15 border-0">
      <div class="peers ai-c fxw-nw">
        <div class="">
          <a class="sidebar-link td-n" href="index.html">
            <div class="peers ai-c fxw-nw">
              <div class="peer">
                <div class="logo">
                  <img src="{{ asset('images') }}/rizghz-logo.png" alt="" 
                       class="rounded-circle m-10 border" 
                       width="50px" 
                       height="50px" 
                       style="border: 2px solid white !important;">
                </div>
              </div>
              <div class="peer peer-greed">
                <h5 class="lh-1 mB-0 logo-text text-white">MINI MARKET</h5>
              </div>
            </div>
          </a>
        </div>
        <div class="peer">
          <div class="mobile-toggle sidebar-toggle">
            <a href="" class="td-n">
              <i class="ti-arrow-circle-left"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- akhir sidebar header -->

    <!-- sidebar menu -->
    <ul class="sidebar-menu scrollable pos-r pT-10">
      
      <li class="nav-item pY-5">
        <a class="sidebar-link" href="{{ route('home') }}">
          <span class="icon-holder">
            <i class="enigma-orange-text-1 ti-home"></i>
          </span><span class="title text-white">Home</span>
        </a>
      </li>
      
      <li class="nav-item pY-5">
        <a class='sidebar-link' href="{{ route('produk.index') }}">
          <span class="icon-holder">
            <i class="enigma-orange-text-1 ti-gift"></i>
          </span><span class="title text-white">Produk</span>
        </a>
      </li>
      
      <li class="nav-item pY-5">
        <a class='sidebar-link' href="{{ route('barang.index') }}">
          <span class="icon-holder">
            <i class="enigma-orange-text-1 ti-package"></i>
          </span><span class="title text-white">Barang</span>
        </a>
      </li>
      
      <li class="nav-item pY-5">
        <a class='sidebar-link' href="{{ route('supplier.index') }}">
          <span class="icon-holder">
            <i class="enigma-orange-text-1 ti-truck"></i>
          </span><span class="title text-white">Supplier</span>
        </a>
      </li>
      
      <li class="nav-item pY-5">
        <a class='sidebar-link' href="{{ route('customer.index') }}">
          <span class="icon-holder">
            <i class="enigma-orange-text-1 ti-user"></i>
          </span><span class="title text-white">Customer</span>
        </a>
      </li>
      
      <li class="nav-item pY-5">
        <a class='sidebar-link' href="{{ route('user.index') }}">
          <span class="icon-holder">
            <i class="enigma-orange-text-1 ti-user"></i>
          </span><span class="title text-white">User</span>
        </a>
      </li>
      
      <li class="nav-item dropdown pY-5">
        <a class="dropdown-toggle" href="javascript:void(0);">
          <span class="icon-holder">
            <i class="enigma-orange-text-1 ti-wallet"></i>
          </span><span class="title text-white">Transaksi</span>
          <span class="arrow">
            <i class="ti-angle-right text-white"></i>
          </span>
        </a>
        <ul class="dropdown-menu">
          <li><a class='sidebar-link text-white' href="basic-table.html">Penjualan</a></li>
          <li><a class='sidebar-link text-white' href="datatable.html">Pembelian</a></li>
        </ul>
      </li>
      
    </ul>
    <!-- akhir sidebar menu -->

  </div>
</div>