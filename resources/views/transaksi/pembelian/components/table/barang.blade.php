<!-- table data barang -->
<table id="table-barang" class="table table-striped enigma-dark-bg-1 text-white border-0">

  <!-- table header -->
  <thead>
    <tr>
      <th data-orderable="false" class="pl-4 border-0">No</th>
      <th data-orderable="false" class="border-0">Kode</th>
      <th data-orderable="false" class="border-0">Nama</th>
      <th data-orderable="false" class="border-0">Satuan</th>
      <th data-orderable="false" class="border-0"></th>
    </tr>
  </thead>
  <!-- akhir table header -->

  <!-- table body -->
  <tbody>
    @foreach ($barang as $item)
      <tr>

        <!-- kolom nomor -->
        <td class="py-2 border-0">
          <div class="py-1 pl-3">{{ $loop->iteration }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom kode barang -->
        <td class="py-2 border-0">
          <div class="py-1">{{ $item->kode }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom nama barang -->
        <td class="py-2 border-0">
          <div class="py-1">{{ $item->nama }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom satuan barang -->
        <td class="py-2 border-0">
          <div class="py-1">{{ $item->satuan }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- aksi -->
        <td class="py-2 border-0">
          <button id="btn-pilih-barang"
                  class="btn btn-primary btn-sm my-0 mx-0 mr-1 z-depth-1 px-2 py-1 rounded"
                  data-barang="{{ $item }}"
                  data-produk="{{ $item->produk }}">
            <i class="fa fa-check mr-1"></i> Pilih
          </button>
        </td>
        <!-- akhir aksi -->

      </tr>
    @endforeach
  </tbody>
  <!-- akhir table body -->

</table>
<!-- akhir table -->
