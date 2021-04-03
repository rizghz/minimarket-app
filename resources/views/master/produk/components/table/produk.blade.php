<!-- title -->
<h4 class="text-white mB-20">
  Data Produk
</h4>
<!-- akhir title -->

<!-- table data produk -->
<table class="table table-striped enigma-dark-bg-1 text-white border-0">

  <!-- table header -->
  <thead>
    <tr>
      <th data-orderable="false" class="pl-4 border-0">No</th>
      <th data-orderable="false" class="border-0">Kode</th>
      <th data-orderable="false" class="border-0">Nama Barang</th>
      <th data-orderable="false" class="border-0">Nama Produk</th>
      <th data-orderable="false" class="border-0">Satuan</th>
      <th data-orderable="false" class="border-0">Harga Jual</th>
      <th data-orderable="false" class="border-0">Stok</th>
      <th data-orderable="false" class="border-0"></th>
    </tr>
  </thead>
  <!-- akhir table header -->

  <!-- table body -->
  <tbody>
    @foreach ($data as $item)
      <tr>

        <!-- kolom nomor -->
        <td class="py-2 border-0">
          <div class="py-1 pl-3">{{ $loop->iteration }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom kode barang -->
        <td class="py-2 border-0">
          <div class="py-1">{{ $item->barang->kode }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom nama barang -->
        <td class="py-2 border-0">
          <div class="py-1">{{ $item->barang->nama }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom nama produk -->
        <td class="py-2 border-0">
          <div class="py-1">{{ $item->nama }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom satuan barang -->
        <td class="py-2 border-0">
          <div class="py-1">{{ $item->barang->satuan }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom harga jual produk -->
        <td class="py-2 border-0">
          <div class="py-1">{{ $item->harga_jual }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom stok -->
        <td class="py-2 border-0">
          <div class="py-1">{{ $item->stok }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- aksi -->
        <td class="py-2 border-0">
          <button class="btn enigma-dark-bg-3 btn-sm my-0 mx-0 mr-1 px-2 py-1 rounded update-trigger"
                  data-toggle="modal"
                  data-target="#modal-update"
                  data-id="{{ $item->id }}"
                  data-nama="{{ $item->nama }}"
                  data-harga_jual="{{ $item->harga_jual }}"
                  data-stok="{{ $item->stok }}">
            <i class="fa fa-pencil text-white"></i>
          </button>
          <button class="btn btn-danger btn-sm my-0 mx-1 px-2 py-1 rounded delete-trigger"
                  data-id="{{ $item->id }}">
            <i class="fa fa-trash"></i>
          </button>
        </td>
        <!-- akhir aksi -->

      </tr>
    @endforeach
  </tbody>
  <!-- akhir table body -->

</table>
<!-- akhir table -->
