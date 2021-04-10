<!-- dialog tambah data supplier -->
<div id="modal-form" class="modal fade"
     aria-labelledby="modal-label"
     aria-hidden="true"
     tabindex="-1"
     role="dialog">

  <div class="modal-dialog modal-lg">
    <div class="modal-content enigma-dark-bg-1 shadow-lg">

      <!-- modal header -->
      <div class="modal-header">
        <h5 id="modal-label" class="modal-title text-white"></h5>
        <button class="btn m-0 px-2 py-1 enigma-dark-bg-1 text-white" 
                data-dismiss="modal"
                type="button">
          <i class="ti-close"></i>
        </button>
      </div>
      <!-- akhir modal header -->

      <!-- modal body -->
      <div class="modal-body my-3">
        @include('master.supplier.components.form')
      </div>
      <!-- akhir modal body -->

    </div>
  </div>

</div>
<!-- akhir dialog -->
