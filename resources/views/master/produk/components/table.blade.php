<!-- table data produk -->
<table class="table table-striped enigma-dark-bg-1 text-white">

  <!-- table header -->
  <thead>
    <tr>
      <th width="10%" class="border-0 pY-20 pl-4">NO</th>
      <th width="15%" class="border-0 pY-20">KODE</th>
      <th width="60%" class="border-0 pY-20">PRODUK</th>
      <th width="" class="border-0 pY-20">AKSI</th>
    </tr>
  </thead>
  <!-- akhir table header -->

  <!-- table body -->
  <tbody>
    @foreach ($produk as $item)
      <tr>

        <!-- kolom nomor -->
        <td class="">
          <div class="py-1 pL-20">{{ $loop->iteration }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom kode produk -->
        <td class="">
          <div class="py-1">{{ $item->kode }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom nama produk -->
        <td class="">
          <div class="py-1">{{ $item->nama }}</div>
        </td>
        <!-- akhir kolom -->
        
        <!-- kolom satuan produk -->
        {{-- <td class="">
          <div class="py-1">{{ $item->satuan }}</div>
        </td> --}}
        <!-- akhir kolom -->

        <!-- aksi -->
        <td class="">
          <button class="btn btn-sm btn-primary mr-2 px-2 py-1 trigger"
                  data-mode="edit"
                  data-toggle="modal"
                  data-target="#modal-form"
                  data-produk="{{ $item }}">
            <i class="ti-pencil-alt text-white"></i>
          </button>
          <button class="btn btn-sm enigma-dark-bg-2 px-2 py-1 delete"
                  data-id="{{ $item->id }}">
            <i class="ti-trash text-white"></i>
          </button>
        </td>
        <!-- akhir aksi -->

      </tr>
    @endforeach
  </tbody>
  <!-- akhir table body -->

</table>
<!-- akhir table -->
