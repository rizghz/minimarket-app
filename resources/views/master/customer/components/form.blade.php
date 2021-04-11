<!-- form tambah data customer -->
<form id="form-customer" class="form-horizontal">

  @csrf

  <!-- form kode customer -->
  <div class="form-group row">

    <!-- label form -->
    <label for="kode" class="col-sm-3 col-form-label text-md-right text-white">
      Kode Customer
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
               placeholder="kode customer"
               autocomplete="off"
               value="{{ $kode }}">
      </div>
      <!-- akhir input form -->

      <!-- feedback -->
      <div id="feedback-kode" class="invalid text-sm pt-2"></div>
      <!-- akhir feedback -->

    </div>

  </div>
  <!-- akhir form kode customer -->

  <!-- form nama customer -->
  <div class="form-group row">

    <!-- label form -->
    <label for="nama" class="col-sm-3 col-form-label text-md-right text-white">
      Nama Customer
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
  <!-- akhir form nama customer -->

  <!-- form alamat -->
  <div class="form-group row">

    <!-- label form -->
    <label for="alamat" class="col-sm-3 col-form-label text-md-right text-white">
      Alamat
    </label>
    <!-- akhir label form -->

    <div class="col-sm-8">

      <!-- input form -->
      <textarea id="alamat" name="alamat" rows="3"
                class="form-control input text-white border-0" 
                style="background-color: #3B4252" 
                placeholder="input alamat" 
                autocomplete="off">
      </textarea>
      <!-- akhir input form -->

      <!-- feedback -->
      <div id="feedback-alamat" class="invalid text-sm pt-2"></div>
      <!-- akhir feedback -->

    </div>

  </div>
  <!-- akhir form alamat -->

  <!-- form nomor telepon -->
  <div class="form-group row">

    <!-- label form -->
    <label for="no_telp" class="col-sm-3 col-form-label text-md-right text-white">
      Nomor Telepon
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
        <input id="no_telp" name="no_telp" type="text"
               class="form-control input text-white border-0"
               style="background-color: #3B4252"
               placeholder="nomor telepon" 
               autocomplete="off">
      </div>
      <!-- akhir input form -->

      <!-- feedback -->
      <div id="feedback-no_telp" class="invalid text-sm pt-2"></div>
      <!-- akhir feedback -->

    </div>

  </div>
  <!-- akhir form nomor telepon -->

  <!-- form email -->
  <div class="form-group row">

    <!-- label form -->
    <label for="email" class="col-sm-3 col-form-label text-md-right text-white">
      Email
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
        <input id="email" name="email" type="text"
               class="form-control input text-white border-0"  
               style="background-color: #3B4252" 
               placeholder="email" 
               autocomplete="off">
      </div>
      <!-- akhir input form -->

      <!-- feedback -->
      <div id="feedback-email" class="invalid text-sm pt-2"></div>
      <!-- akhir feedback -->

    </div>

  </div>
  <!-- akhir form email -->

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
