<!-- form pembelian barang -->
<form class="form-pembelian">

  <div class="form-group row mx-5 my-3">

    <!-- label form -->
    <label for="kode_pembelian" class="col-sm-2 col-form-label text-right text-white">
      Kode Pembelian
    </label>
    <!-- akhir label form -->

    <!-- input form -->
    <div class="col-sm-2">
      <input id="kode_pembelian" name="kode_pembelian" type="text" readonly
             class="form-control enigma-dark-bg-2 border-0 enigma-orange-text-2 data"
             value="{{ $kode }}">
    </div>
    <!-- akhir form input -->

    <!-- label form -->
    <label for="tanggal" class="col-sm-2 offset-1 col-form-label text-right text-white">
      Tanggal Pembelian
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
    <label for="supplier" class="col-sm-2 offset-1 col-form-label text-right text-white">
      Supplier
    </label>
    <!-- akhir label form -->

    <!-- input form -->
    <div class="col-sm-4">
      <div class="input-group">
        <select id="supplier_id" name="supplier_id"
                class="form-control custom-select input enigma-dark-bg-2 border-0 text-white data">
          @foreach ($supplier as $data)
            <option value="{{ $data->id }}">{{ $data->nama }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <!-- akhir input form -->

  </div>

</form>
<!-- akhir form -->
