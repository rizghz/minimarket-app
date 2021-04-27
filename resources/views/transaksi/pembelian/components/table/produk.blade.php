<!-- table data produk -->
<table id="table-produk" class="table table-striped enigma-dark-bg-1 text-white border-0">

  <!-- table header -->
  <thead>
    <tr>
      <th width="" class="border-0 pY-20 pl-4">NO</th>
      <th width="" class="border-0 pY-20">KODE</th>
      <th width="" class="border-0 pY-20">PRODUK</th>
      <th width="" class="border-0 pY-20"></th>
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

        <!-- aksi -->
        <td class="py-2 border-0">
          <button id="btn-pilih-barang"
                  class="btn btn-primary btn-sm my-0 mx-0 mr-1 z-depth-1 px-2 py-1 rounded"
                  data-produk="{{ $item }}"
                  data-barang="{{ $item->barang }}">
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
