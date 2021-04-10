<!-- table data barang -->
<table class="table table-striped enigma-dark-bg-1 text-white">

  <!-- table header -->
  <thead>
    <tr>
      <th width="" class="border-0 pY-20 pl-4">NO</th>
      <th width="" class="border-0 pY-20">KODE</th>
      <th width="" class="border-0 pY-20">PRODUK</th>
      <th width="" class="border-0 pY-20">NAMA BARANG</th>
      <th width="" class="border-0 pY-20">SATUAN</th>
      <th width="" class="border-0 pY-20">HARGA JUAL</th>
      <th width="" class="border-0 pY-20">STOK</th>
      <th width="" class="border-0 pY-20">AKSI</th>
    </tr>
  </thead>
  <!-- akhir table header -->

  <!-- table body -->
  <tbody>
    @foreach ($barang as $item)
      <tr>

        <!-- kolom nomor -->
        <td class="">
          <div class="py-1 pL-20">{{ $loop->iteration }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom kode barang -->
        <td class="">
          <div class="py-1">{{ $item->produk->kode.".".$item->kode }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom nama produk -->
        <td class="">
          <div class="py-1">{{ $item->produk->nama }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom nama barang -->
        <td class="">
          <div class="py-1">{{ $item->nama }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom satuan barang -->
        <td class="">
          <div class="py-1">{{ $item->satuan }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom harga jual barang -->
        <td class="">
          <div class="py-1">{{ $item->toRp() }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom stok -->
        <td class="">
          <div class="py-1">{{ $item->stok }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- aksi -->
        <td class="">
          <button class="btn btn-sm btn-primary mr-2 px-2 py-1 trigger"
                  data-mode="edit"
                  data-toggle="modal"
                  data-target="#modal-form"
                  data-barang="{{ $item }}">
            <i class="ti-pencil text-white"></i>
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
