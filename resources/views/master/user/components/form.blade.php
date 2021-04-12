<!-- form tambah data user -->
<form id="form-user" class="form-horizontal">

  @csrf

  <!-- form nama -->
  <div class="form-group row">

    <!-- label form -->
    <label for="name" class="col-sm-3 col-form-label text-md-right text-white">
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
        <input id="name" name="name" type="text"
               class="form-control input text-white border-0" 
               style="background-color: #3B4252"
               placeholder="name" 
               autocomplete="off">
      </div>
      <!-- akhir input form -->

      <!-- feedback -->
      <div id="feedback-name" class="invalid alert-text text-sm pt-2"></div>
      <!-- akhir feedback -->

    </div>

  </div>
  <!-- akhir form nama -->

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
      <div id="feedback-email" class="invalid alert-text text-sm pt-2"></div>
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
