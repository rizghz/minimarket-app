@extends('layouts.app')

@section('title', 'Mini Market - Home')

@section('content')
<div class="row gap-20 masonry pos-r">
  <div class="masonry-sizer col-md-6"></div>
  <div class="masonry-item  w-100">
    <div class="row gap-20">
      <!-- barang -->
      <div class='col-md-3'>
        <div class="layers bd bgc-white p-20 enigma-dark-bg-1 rounded">
          <div class="layer w-100 mB-10">
            <h6 class="lh-1 text-white">Barang</h6>
          </div>
          <div class="layer w-100">
            <div class="peers ai-sb fxw-nw">
              <div class="peer peer-greed">
                <span id="sparklinedash"></span>
              </div>
              <div class="peer">
                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500 enigma-dark-bg-2">+10%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- supplier -->
      <div class='col-md-3'>
        <div class="layers bd bgc-white p-20 enigma-dark-bg-1 rounded">
          <div class="layer w-100 mB-10">
            <h6 class="lh-1 text-white">Supplier</h6>
          </div>
          <div class="layer w-100">
            <div class="peers ai-sb fxw-nw">
              <div class="peer peer-greed">
                <span id="sparklinedash2"></span>
              </div>
              <div class="peer">
                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500 enigma-dark-bg-2">-7%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- customer -->
      <div class='col-md-3'>
        <div class="layers bd bgc-white p-20 enigma-dark-bg-1 rounded">
          <div class="layer w-100 mB-10">
            <h6 class="lh-1 text-white">Customer</h6>
          </div>
          <div class="layer w-100">
            <div class="peers ai-sb fxw-nw">
              <div class="peer peer-greed">
                <span id="sparklinedash3"></span>
              </div>
              <div class="peer">
                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500 enigma-dark-bg-2">~12%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- user -->
      <div class='col-md-3'>
        <div class="layers bd bgc-white p-20 enigma-dark-bg-1 rounded">
          <div class="layer w-100 mB-10">
            <h6 class="lh-1 text-white">User</h6>
          </div>
          <div class="layer w-100">
            <div class="peers ai-sb fxw-nw">
              <div class="peer peer-greed">
                <span id="sparklinedash4"></span>
              </div>
              <div class="peer">
                <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500 enigma-dark-bg-2">33%</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
