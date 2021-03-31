<h4 class="text-white mB-20">Data Barang</h4>

<table class="table table-striped enigma-dark-bg-1 text-white border-0">

  <thead>
    <tr>
      <th data-orderable="false" class="pl-4 border-0">No</th>
      <th data-orderable="false" class="border-0">Kode</th>
      <th data-orderable="false" class="border-0">Nama</th>
      <th data-orderable="false" class="border-0">Satuan</th>
      <th data-orderable="false" class="border-0"></th>
    </tr>
  </thead>
  
  <tbody>
    
    @foreach ($data as $item)
      
      <tr>
        
        <td class="py-2 border-0">
          <div class="py-1 pl-3">{{ $loop->iteration }}</div>
        </td>
        
        <td class="py-2 border-0">
          <div class="py-1">{{ $item->kode }}</div>
        </td>
        
        <td class="py-2 border-0">
          <div class="py-1">{{ $item->nama }}</div>
        </td>

        <td class="py-2 border-0">
          <div class="py-1">{{ $item->satuan }}</div>
        </td>
        
        <td class="py-2 border-0">
          
          <button class="btn enigma-dark-bg-3 btn-sm my-0 mx-0 mr-1 px-2 py-1 rounded update-trigger"
             data-id="{{ $item->id }}"
             data-kode="{{ $item->kode }}"
             data-nama="{{ $item->nama }}"
             data-satuan="{{ $item->satuan }}"
             data-harga_jual="{{ $item->harga_jual }}"
             data-stok="{{ $item->stok }}"
             data-toggle="modal"
             data-target="#form-modal-update">
            <i class="fa fa-pencil text-white"></i>
          </button>
          
          <button class="btn btn-danger btn-sm my-0 mx-1 px-2 py-1 rounded delete-trigger"
             data-id="{{ $item->id }}">
            <i class="fa fa-trash"></i>
          </button>

        </td>

      </tr>

    @endforeach

  </tbody>

</table>
