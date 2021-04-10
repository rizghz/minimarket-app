<!-- form tambah data barang -->
<form id="form-barang" class="form-horizontal">

  @csrf

  <!-- form kode barang-->
  <div class="form-group row">

    <!-- label form -->
    <label for="kode" class="col-sm-3 col-form-label text-md-right text-white">
      Kode Barang
    </label>
    <!-- akhir label form -->

    <div class="col-sm-8">

      <!-- input form -->
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text text-muted enigma-dark-bg-2 border-0">
            <i class="fa fa-pencil pl-1"></i>
          </span>
        </div>
        <input id="kode" name="kode" type="text" readonly
               class="form-control input text-white border-0"
               style="background-color: #3B4252"
               placeholder="kode barang"
               autocomplete="off"
               value="{{ $kode }}">
      </div>
      <!-- akhir input form -->

      <!-- feedback -->
      <div id="feedback-kode" class="invalid text-sm pt-2"></div>
      <!-- akhir feedback -->

    </div>

  </div>
  <!-- akhir form kode barang-->

  <!-- form nama barang -->
  <div class="form-group row">

    <!-- label form -->
    <label for="nama" class="col-sm-3 col-form-label text-md-right text-white">
      Nama Barang
    </label>
    <!-- akhir label form -->

    <div class="col-sm-8">

      <!-- input form -->
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text text-muted enigma-dark-bg-2 border-0">
            <i class="fa fa-pencil pl-1"></i>
          </span>
        </div>
        <input id="nama" name="nama" type="text"
               class="form-control input text-white border-0"
               style="background-color: #3B4252"
               placeholder="nama" 
               autocomplete="off">
      </div>
      <!-- akhir input form -->

      <!-- feedback -->
      <div id="feedback-nama" class="invalid text-sm pt-2"></div>
      <!-- akhir feedback -->

    </div>

  </div>
  <!-- akhir form nama barang -->

  <!-- form nama produk -->
  <div class="form-group row">

    <!-- label form -->
    <label for="produk_id" class="col-sm-3 col-form-label text-md-right text-white">
      Nama Produk
    </label>
    <!-- akhir label form -->

    <div class="col-sm-8">

      <!-- input form -->
      <div class="input-group">
        <select id="produk_id" name="produk_id"
                class="form-control custom-select input enigma-dark-bg-2 text-white border-0">
          @foreach ($produk as $data)
            <option value="{{ $data->id }}">{{ $data->nama }}</option>
          @endforeach
        </select>
      </div>
      <!-- akhir input form -->

      <!-- feedback -->
      <div id="feedback-produk_id" class="invalid text-sm pt-2"></div>
      <!-- feedback -->

    </div>

  </div>
  <!-- akhir form nama barang -->

  <!-- form satuan barang -->
  <div class="form-group row">

    <!-- label form -->
    <label for="satuan" class="col-sm-3 col-form-label text-md-right text-white">
      Satuan
    </label>
    <!-- akhir label form -->

    <div class="col-sm-8">

      <!-- input form -->
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text text-muted enigma-dark-bg-2 border-0">
            <i class="fa fa-pencil pl-1"></i>
          </span>
        </div>
        <input id="satuan" name="satuan" type="text"
               class="form-control input text-white border-0"
               style="background-color: #3B4252"
               placeholder="satuan"
               autocomplete="off">
      </div>
      <!-- akhir input form -->

      <!-- feedback -->
      <div id="feedback-satuan" class="invalid text-sm pt-2"></div>
      <!-- akhir feedback -->

    </div>

  </div>
  <!-- akhir form satuan barang-->

  <!-- form harga jual-->
  <div class="form-group row">

    <!-- label form -->
    <label for="harga_jual" class="col-sm-3 col-form-label text-md-right text-white">
      Harga Jual
    </label>
    <!-- akhir label form -->

    <div class="col-sm-8">

      <!-- input form -->
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text text-muted enigma-dark-bg-2 border-0">
            <i class="fa fa-pencil pl-1"></i>
          </span>
        </div>
        <input id="harga_jual" name="harga_jual" type="text"
               class="form-control input text-white border-0" 
               style="background-color: #3B4252"
               placeholder="harga jual" 
               autocomplete="off">
      </div>
      <!-- akhir input form -->

      <!-- feedback -->
      <div id="feedback-harga_jual" class="invalid text-sm pt-2"></div>
      <!-- akhir feedback -->

    </div>

  </div>
  <!-- akhir form harga jual -->

  <!-- form stok -->
  <div class="form-group row">

    <!-- label form -->
    <label for="stok" class="col-sm-3 col-form-label text-md-right text-white">
      Stok
    </label>
    <!-- akhir label form -->

    <div class="col-sm-8">

      <!-- input form -->
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text text-muted enigma-dark-bg-2 border-0">
            <i class="fa fa-pencil pl-1"></i>
          </span>
        </div>
        <input id="stok" name="stok" type="text" 
               class="form-control input text-white border-0"
               style="background-color: #3B4252"
               placeholder="stok" 
               autocomplete="off">
      </div>
      <!-- akhir input form -->

      <!-- feedback -->
      <div id="feedback-stok" class="invalid text-sm pt-2"></div>
      <!-- akhir feedback -->

    </div>

  </div>
  <!-- akhir form stok -->

  <!-- tombol -->
  <div class="form-group row mt-3 mb-0">
    <div class="col-6 offset-3">

      <!-- tombol submit -->
      <button id="btn-submit" type="button"
              class="btn enigma-dark-bg-2 text-white rounded mr-2">
        <i class="fa fa-save mx-1"></i> Submit
      </button>
      <!-- akhir tombol submit -->

      <!-- tombol batal -->
      <button type="button"
              class="btn btn-danger rounded"
              data-dismiss="modal">
        <i class="fa fa-chevron-left mx-1"></i> Batal
      </button>
      <!-- akhir tombol batal -->

    </div>
  </div>
  <!-- akhir tombol -->

</form>
<!-- akhir form -->
