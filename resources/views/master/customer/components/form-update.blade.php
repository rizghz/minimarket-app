<!-- form -->
<form class="form-horizontal" 
      action="{{ route('customer.index') }}"
      method="post"
      id="form-update">

  @method('patch')

  <!-- form kode customer -->
  <div class="form-group row">
    <label for="kode" class="col-sm-3 col-form-label text-md-right text-white">Kode Customer</label>
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
               placeholder="kode customer" 
               autocomplete="off">
      </div>
      <div id="invalid-feedback-kode" class="invalid alert-text text-sm pt-2"></div>
    </div>
  </div>
  <!-- akhir form kode customer -->

  <!-- form nama customer -->
  <div class="form-group row">
    <label for="nama" class="col-sm-3 col-form-label text-md-right text-white">Nama Customer</label>
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
  <!-- akhir form nama customer -->

  <!-- form alamat -->
  <div class="form-group row">
    <label for="alamat" class="col-sm-3 col-form-label text-md-right text-white">Alamat</label>
    <div class="col-sm-8">
      <textarea class="form-control input text-white border-0" 
                rows="3"
                id="alamat" 
                name="alamat" 
                style="background-color: #3B4252" 
                placeholder="input alamat" 
                autocomplete="off"></textarea>
      <div id="invalid-feedback-alamat" class="invalid alert-text text-sm pt-2"></div>
    </div>
  </div>
  <!-- akhir form alamat -->

  <!-- form nomor telepon -->
  <div class="form-group row">
    <label for="no_telp" class="col-sm-3 col-form-label text-md-right text-white">Nomor Telepon</label>
    <div class="col-sm-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text text-muted enigma-dark-bg-2 border-0">
            <i class="fa fa-pencil pl-1"></i>
          </span>
        </div>
        <input type="text" class="form-control input text-white border-0" 
              id="no_telp"
              name="no_telp" 
              style="background-color: #3B4252"
              placeholder="nomor telepon" 
              autocomplete="off">
      </div>
      <div id="invalid-feedback-no_telp" class="invalid alert-text text-sm pt-2"></div>
    </div>
  </div>
  <!-- akhir form nomor telepon -->

  <!-- form email -->
  <div class="form-group row">
    <label for="email" class="col-sm-3 col-form-label text-md-right text-white">Email</label>
    <div class="col-sm-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text text-muted enigma-dark-bg-2 border-0">
            <i class="fa fa-pencil pl-1"></i>
          </span>
        </div>
        <input type="text" class="form-control input text-white border-0" 
               id="email" 
               name="email" 
               style="background-color: #3B4252" 
               placeholder="email" 
               autocomplete="off">
      </div>
      <div id="invalid-feedback-email" class="invalid alert-text text-sm pt-2"></div>
    </div>
  </div>
  <!-- akhir form email -->

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
