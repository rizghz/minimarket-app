<!-- title -->
<h4 class="text-white mB-20">
  Data Customer
</h4>
<!-- akhir title -->

<!-- table data customer -->
<table class="table table-striped enigma-dark-bg-1 text-white border-0">

  <!-- table header -->
  <thead>
    <tr>
      <th data-orderable="false" class="pl-4 border-0">No</th>
      <th data-orderable="false" class="border-0">Kode</th>
      <th data-orderable="false" class="border-0">Nama</th>
      <th data-orderable="false" class="border-0">Alamat</th>
      <th data-orderable="false" class="border-0">Nomor Telepon</th>
      <th data-orderable="false" class="border-0">Email</th>
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

        <!-- kolom kode supplier -->
        <td class="py-2 border-0">
          <div class="py-1">{{ $item->kode }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom nama supplier -->
        <td class="py-2 border-0">
          <div class="py-1">{{ $item->nama }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom alamat -->
        <td class="py-2 border-0">
          <div class="py-1">{{ $item->alamat }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom nomor telepon -->
        <td class="py-2 border-0">
          <div class="py-1">{{ $item->no_telp }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom email -->
        <td class="py-2 border-0">
          <div class="py-1">{{ $item->email }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- aksi -->
        <td class="py-2 border-0">
          <button class="btn enigma-dark-bg-3 btn-sm my-0 mx-0 mr-1 px-2 py-1 rounded update-trigger"
                  data-toggle="modal"
                  data-target="#modal-update"
                  data-id="{{ $item->id }}"
                  data-kode="{{ $item->kode }}"
                  data-nama="{{ $item->nama }}"
                  data-alamat="{{ $item->alamat }}"
                  data-no_telp="{{ $item->no_telp }}"
                  data-email="{{ $item->email }}">
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
