<!-- form tambah data barang -->
<form id="form-tambah" class="form-horizontal">

  @method("post")
  @csrf

  <!-- form kode barang-->
  <div class="form-group row">

    <!-- label form -->
    <label for="kode" class="col-sm-3 col-form-label text-md-right text-white">
      Kode Barang
    </label>
    <!-- akhir label form -->

    <!-- input form -->
    <div class="col-sm-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text text-muted enigma-dark-bg-2 border-0">
            <i class="fa fa-pencil pl-1"></i>
          </span>
        </div>
        <input id="kode" name="kode" class="form-control text-white border-0" 
               style="background-color: #3B4252" 
               placeholder="kode barang" 
               autocomplete="off"
               value="{{ $kode }}"
               type="text"
               readonly>
      </div>
      <!-- akhir input form -->

      <!-- feedback -->
      <div id="feedback-kode" class="invalid text-sm pt-2"></div>
      <!-- akhir feedback -->

    </div>
  </div>
  <!-- akhir form kode barang-->

  <!-- form nama barang-->
  <div class="form-group row">

    <!-- label form -->
    <label for="nama" class="col-sm-3 col-form-label text-md-right text-white">
      Nama Barang
    </label>
    <!-- akhir label form -->

    <!-- input form -->
    <div class="col-sm-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text text-muted enigma-dark-bg-2 border-0">
            <i class="fa fa-pencil pl-1"></i>
          </span>
        </div>
        <input id="nama" name="nama" class="form-control input text-white border-0" 
               style="background-color: #3B4252"
               placeholder="nama" 
               autocomplete="off"
               type="text">
      </div>
      <!-- akhir input form -->

      <!-- feedback -->
      <div id="feedback-nama" class="invalid alert-text text-sm pt-2"></div>
      <!-- akhir feedback -->

    </div>
  </div>
  <!-- akhir form nama barang-->

  <!-- form satuan barang -->
  <div class="form-group row">

    <!-- label form -->
    <label for="satuan" class="col-sm-3 col-form-label text-md-right text-white">
      Satuan
    </label>
    <!-- akhir label form -->

    <!-- input form -->
    <div class="col-sm-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text text-muted enigma-dark-bg-2 border-0">
            <i class="fa fa-pencil pl-1"></i>
          </span>
        </div>
        <input id="satuan" name="satuan" class="form-control input text-white border-0" 
               style="background-color: #3B4252"
               placeholder="satuan" 
               autocomplete="off"
               type="text">
      </div>
      <!-- akhir input form -->

      <!-- feedback -->
      <div id="feedback-satuan" class="invalid text-sm pt-2"></div>
      <!-- akhir feedback -->

    </div>
  </div>
  <!-- akhir form satuan barang -->

  <!-- tombol -->
  <div class="form-group row mt-3 mb-0">
    <div class="col-6 offset-3">

      <!-- tombol submit -->
      <button id="btn-submit" class="btn enigma-dark-bg-2 text-white rounded mr-2"
              data-form="#form-tambah"
              type="button">
        <i class="fa fa-save mx-1"></i> Submit
      </button>
      <!-- akhir tombol submit -->

      <!-- tombol batal -->
      <button class="btn btn-danger rounded"
              data-dismiss="modal"
              type="button">
        <i class="fa fa-chevron-left mx-1"></i> Batal
      </button>
      <!-- akhir tombol batal -->

    </div>
  </div>
  <!-- akhir tombol -->

</form>
<!-- akhir form -->
