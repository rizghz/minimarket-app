<!-- form update data produk -->
<form id="form-update" class="form-horizontal">

  @method("patch")
  @csrf

  <!-- form nama produk -->
  <div class="form-group row">

    <!-- label form -->
    <label for="nama" class="col-sm-3 col-form-label text-md-right text-white">
      Nama Produk
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
  <!-- akhir form nama produk -->

  <!-- form nama barang -->
  <div class="form-group row">

    <!-- label form -->
    <label for="barang_id" class="col-sm-3 col-form-label text-md-right text-white">
      Nama Barang
    </label>
    <!-- akhir label form -->

    <div class="col-sm-8">

      <!-- input form -->
      <div class="input-group">
        <select id="barang_id" name="barang_id"
                class="form-control custom-select input enigma-dark-bg-2 text-white border-0">
          @foreach ($barang as $data)
            <option value="{{ $data->id }}">{{ $data->nama }}</option>
          @endforeach
        </select>
      </div>
      <!-- akhir input form -->

      <!-- feedback -->
      <div id="feedback-barang_id" class="invalid text-sm pt-2"></div>
      <!-- feedback -->

    </div>

  </div>
  <!-- akhir form nama barang -->

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
