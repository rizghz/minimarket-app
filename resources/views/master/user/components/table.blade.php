<!-- table data user -->
<table class="table table-striped enigma-dark-bg-1 text-white">

  <!-- table header -->
  <thead>
    <tr>
      <th width="10%" class="border-0 pY-20 pl-4">NO</th>
      <th width="" class="border-0 pY-20">NAMA USER</th>
      <th width="60%" class="border-0 pY-20">EMAIL</th>
      <th width="" class="border-0 pY-20">AKSI</th>
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

        <!-- kolom nama -->
        <td class="">
          <div class="py-1">{{ $item->name }}</div>
        </td>
        <!-- akhir kolom -->

        <!-- kolom email -->
        <td class="">
          <div class="py-1">{{ $item->email }}</div>
        </td>
        <!-- akhir kolom -->
        
        <!-- aksi -->
        <td class="">
          <button class="btn btn-sm btn-primary mr-2 px-2 py-1 trigger"
                  data-mode="edit"
                  data-toggle="modal"
                  data-target="#modal-form"
                  data-user="{{ $item }}">
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
