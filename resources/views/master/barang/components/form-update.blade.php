<!-- form -->
<form class="form-horizontal" 
      action="{{ route('barang.index') }}"
      method="post"
      id="form-update">

  @method('patch')

  <!-- form kode barang-->
  <div class="form-group row">
    <label for="kode" class="col-sm-3 col-form-label text-md-right text-white">Kode Barang</label>
    <div class="col-sm-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text text-muted enigma-dark-bg-2 border-0">
            <i class="fa fa-pencil pl-1"></i>
          </span>
        </div>
        <input type="text" class="form-control input text-white border-0" 
               id="kode"
               name="kode" 
               style="background-color: #3B4252" 
               placeholder="kode Barang" 
               autocomplete="off">
      </div>
      <div id="invalid-feedback-kode" class="invalid alert-text text-sm pt-2"></div>
    </div>
  </div>
  <!-- akhir form kode barang-->

  <!-- form nama barang-->
  <div class="form-group row">
    <label for="nama" class="col-sm-3 col-form-label text-md-right text-white">Nama Barang</label>
    <div class="col-sm-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text text-muted enigma-dark-bg-2 border-0">
            <i class="fa fa-pencil pl-1"></i>
          </span>
        </div>
        <input type="text" class="form-control input text-white border-0" 
              id="nama"
              name="nama" 
              style="background-color: #3B4252"
              placeholder="nama" 
              autocomplete="off">
      </div>
      <div id="invalid-feedback-nama" class="invalid alert-text text-sm pt-2"></div>
    </div>
  </div>
  <!-- akhir form nama barang-->

  <!-- form satuan-->
  <div class="form-group row">
    <label for="satuan" class="col-sm-3 col-form-label text-md-right text-white">Satuan</label>
    <div class="col-sm-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text text-muted enigma-dark-bg-2 border-0">
            <i class="fa fa-pencil pl-1"></i>
          </span>
        </div>
        <input type="text" class="form-control input text-white border-0" 
              id="satuan"
              name="satuan" 
              style="background-color: #3B4252"
              placeholder="satuan" 
              autocomplete="off">
      </div>
      <div id="invalid-feedback-satuan" class="invalid alert-text text-sm pt-2"></div>
    </div>
  </div>
  <!-- akhir form satuan-->

  <!-- tombol -->
  <div class="form-group row mt-3 mb-0">
    <div class="col-6 offset-3">

      <!-- tombol submit -->
      <button type="button" class="btn enigma-dark-bg-2 text-white rounded mr-2" id="btn-submit" data-form="#form-update">
        <i class="fa fa-save mx-1"></i> Submit
      </button>
      <!-- akhir tombol submit -->

      <!-- tombol batal -->
      <button type="button" class="btn btn-danger rounded" data-dismiss="modal">
        <i class="fa fa-chevron-left mx-1"></i> Batal
      </button>
      <!-- akhir tombol batal -->

    </div>
  </div>
  <!-- akhir tombol -->

</form>
<!-- akhir form -->
