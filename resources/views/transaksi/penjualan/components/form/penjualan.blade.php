<!-- form pembelian barang -->
<form class="form-penjualan">

  <div class="form-group row mx-5 my-3">

    <!-- label form -->
    <label for="no_faktur" class="col-sm-2 col-form-label text-right text-white">
      Nomor Faktur
    </label>
    <!-- akhir label form -->

    <!-- input form -->
    <div class="col-sm-2">
      <input id="no_faktur" name="no_faktur" type="text" readonly
             class="form-control enigma-dark-bg-2 border-0 enigma-orange-text-2 data"
             value="{{ $kode }}">
    </div>
    <!-- akhir form input -->

    <!-- label form -->
    <label for="tanggal" class="col-sm-2 offset-1 col-form-label text-right text-white">
      Tanggal Faktur
    </label>
    <!-- akhir label form -->

    <!-- input form -->
    <div class="col-sm-4">
      <input id="tanggal" name="tanggal" type="date"
             class="form-control enigma-dark-bg-2 border-0 text-white data"
             value="{{ date('Y-m-d') }}">
    </div>
    <!-- akhir input form -->

  </div>

  <div class="form-group row mx-5 my-3">

    <!-- tombol pilih barang -->
    <div class="col-sm-2 offset-2">
      <button type="button" class="btn btn-success text-white rounded"
              data-target="#modal-pilih-barang"
              data-toggle="modal">
        <i class="fa fa-plus mx-1"></i>
        <span class="d-none d-md-inline">Pilih Barang</span>
      </button>
    </div>
    <!-- akhir tombol -->

    <!-- label form -->
    <label for="customer" class="col-sm-2 offset-1 col-form-label text-right text-white">
      Customer
    </label>
    <!-- akhir label form -->

    <!-- input form -->
    <div class="col-sm-4">
      <div class="input-group py-1">
        <select id="customer_id" name="customer_id"
                class="form-control input enigma-dark-bg-2 border-0 text-white data"
                data-placeholder="pilih customer">
          <option value=""></option>
          @foreach ($customer as $data)
            <option value="{{ $data->id }}">{{ $data->nama }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <!-- akhir input form -->

  </div>

</form>
<!-- akhir form -->
