<!-- table data supplier -->
<table class="table table-striped enigma-dark-bg-1 text-white">

  <!-- table header -->
  <thead>
    <tr>
      <th width="" class="border-0 pY-20 pl-4">No</th>
      <th width="" class="border-0 pY-20">Kode</th>
      <th width="" class="border-0 pY-20">Nama</th>
      <th width="" class="border-0 pY-20">Alamat</th>
      <th width="" class="border-0 pY-20">Kota</th>
      <th width="" class="border-0 pY-20">Nomor Telepon</th>
      <th width="" class="border-0 pY-20"></th>
    </tr>
  </thead>
  <!-- akhir table header -->

  <!-- table body -->
  <tbody>
    @foreach ($data as $item)
      <tr>

        <!-- kolom nomor -->
        <td class="">
          <div class="py-1 pL-20">{{ $loop->iteration }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom kode supplier -->
        <td class="">
          <div class="py-1">{{ $item->kode }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom nama supplier -->
        <td class="">
          <div class="py-1">{{ $item->nama }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom alamat -->
        <td class="">
          <div class="py-1">{{ $item->alamat }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom kota -->
        <td class="">
          <div class="py-1">{{ $item->kota }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom nomor telepon -->
        <td class="">
          <div class="py-1">{{ $item->no_telp }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- aksi -->
        <td class="">
          <button class="btn btn-sm btn-primary mr-2 px-2 py-1 trigger"
                  data-mode="edit"
                  data-toggle="modal"
                  data-target="#modal-form"
                  data-supplier="{{ $item }}">
            <i class="ti-pencil-alt text-white"></i>
          </button>
          <button class="btn btn-sm enigma-dark-bg-2 px-2 py-1 delete"
                  data-id="{{ $item->id }}">
            <i class="ti-trash text-white"></i>
          </button>
        </td>
        <!-- aksi -->

      </tr>
    @endforeach
  </tbody>
  <!-- akhir table body -->

</table>
<!-- akhir table -->
