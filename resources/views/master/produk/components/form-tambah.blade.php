<!-- form -->
<form class="form-horizontal" 
      action="{{ route('produk.index') }}"
      method="post"
      id="form-tambah">

  <!-- form nama produk -->
  <div class="form-group row">
    <label for="nama" class="col-sm-3 col-form-label text-md-right text-white">Nama Produk</label>
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
  <!-- akhir form nama produk -->

  <!-- form nama barang -->
  <div class="form-group row">
    <label for="barang_id" class="col-sm-3 col-form-label text-md-right text-white">Nama Barang</label>
    <div class="col-sm-8">
      <div class="input-group">
        <select class="form-control custom-select input enigma-dark-bg-2 text-white" 
                name="barang_id" 
                id="barang_id">
          @foreach ($barang as $data)
            <option value="{{ $data->id }}">{{ $data->nama }}</option>
          @endforeach
        </select>
      </div>
      <div id="invalid-feedback-barang_id" class="invalid alert-text text-sm pt-2"></div>
    </div>
  </div>
  <!-- akhir form nama barang -->

  <!-- form harga jual-->
  <div class="form-group row">
    <label for="harga_jual" class="col-sm-3 col-form-label text-md-right text-white">Harga Jual</label>
    <div class="col-sm-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text text-muted enigma-dark-bg-2 border-0">
            <i class="fa fa-pencil pl-1"></i>
          </span>
        </div>
        <input type="text" class="form-control input text-white border-0" 
              id="harga_jual"
              name="harga_jual" 
              style="background-color: #3B4252"
              placeholder="harga jual" 
              autocomplete="off">
      </div>
      <div id="invalid-feedback-harga_jual" class="invalid alert-text text-sm pt-2"></div>
    </div>
  </div>
  <!-- akhir form harga jual -->

  <!-- form stok -->
  <div class="form-group row">
    <label for="stok" class="col-sm-3 col-form-label text-md-right text-white">Stok</label>
    <div class="col-sm-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text text-muted enigma-dark-bg-2 border-0">
            <i class="fa fa-pencil pl-1"></i>
          </span>
        </div>
        <input type="text" class="form-control input text-white border-0" 
              id="stok"
              name="stok" 
              style="background-color: #3B4252"
              placeholder="stok" 
              autocomplete="off">
      </div>
      <div id="invalid-feedback-stok" class="invalid alert-text text-sm pt-2"></div>
    </div>
  </div>
  <!-- akhir form stok -->

  <!-- tombol -->
  <div class="form-group row mt-3 mb-0">
    <div class="col-6 offset-3">

      <!-- tombol submit -->
      <button type="button" class="btn enigma-dark-bg-2 text-white rounded mr-2" id="btn-submit" data-form="#form-tambah">
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
