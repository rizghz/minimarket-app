<div id="form-modal-tambah" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content enigma-dark-bg-1 shadow-lg">
      <div class="modal-header" style="border-color: #3B4252">
        <h5 class="modal-title" id="modal-label">Tambah Data Customer</h5>
        <button type="button" 
                class="btn m-0 px-2 py-1 z-depth-0 enigma-dark-bg-1 border-0 text-white" 
                data-dismiss="modal">
          <i class="ti-close"></i>
        </button>
      </div>
      <div class="modal-body my-3">
        @include('master.customer.components.form-tambah')
      </div>
    </div>
  </div>
</div>

<div id="form-modal-update" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modal-label" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content enigma-dark-bg-1 shadow-lg">
      <div class="modal-header" style="border-color: #3B4252">
        <h5 class="modal-title" id="modal-label">Edit Data Customer</h5>
        <button type="button" 
                class="btn m-0 px-2 py-1 z-depth-0 enigma-dark-bg-1 border-0 text-white" 
                data-dismiss="modal">
          <i class="ti-close"></i>
        </button>
      </div>
      <div class="modal-body my-3">
        @include('master.customer.components.form-update')
      </div>
    </div>
  </div>
</div>
