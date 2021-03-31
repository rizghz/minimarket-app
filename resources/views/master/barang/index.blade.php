@extends('layouts.app')

@section('title', 'Mini Market - Barang')

@section('content')

  <button class="btn btn-lg enigma-dark-bg-1 text-white rounded mb-4 tambah-trigger"
          data-toggle="modal"
          data-target="#form-modal-tambah">
    <i class="fa fa-plus mx-1"></i>
    <span class="d-none d-md-inline">Tambah</span>
  </button>

  <div class="row">
    <div class="col-md-12">
      <div class="enigma-dark-bg-1 shadow bgc-white bd bdrs-3 p-20 mB-20">
        @include('master.barang.components.dialog')
        @include('master.barang.components.table')
      </div>
    </div>
  </div>

@endsection

@push('script')
<script>
  
  let request = (route, type, data = null) => {
    let buffer = null;
    buffer = $.ajax({
        async: false,
        url: route,
        type: type,
        data: data,
    }).always(function(a, b, c) { console.log(c); });
    return buffer;
  };

  $(() => {
    let formTambah = $('#form-barang-tambah').find('.form-control.input');
    let formUpdate = $('#form-barang-update').find('.form-control.input');
    let dataId = "";
    
    $('body').on('click', '.tambah-trigger', function(e) {
      e.preventDefault();
      for (let i = 0; i < formTambah.length; i++) {
        formTambah.eq(i).val(null).trigger('change');
      }
    });
    
    $('body').on('click', '.update-trigger', function(e) {
      e.preventDefault();
      let data = $(this).data();
      dataId = data['id'];
      for (let i = 0; i < formUpdate.length; i++) {
        formUpdate.eq(i).val(data[formUpdate.eq(i).attr('name')]).trigger('change');
      }
    });
    
    $('body').on('click', '#btn-submit', function(e) {
      e.preventDefault();
      let form = $($(this).data('form'));
      let res = request(`${form.attr('action')}/${dataId}`, 'post', form.serialize());
      if (res['status'] == 200) {
        result = parseInt(res['responseText']);
        if (!result) {
          alert('failed');
          location.reload();
        }
        alert('sucess');
        location.reload();
      } else {
        let error = res['responseJSON']['errors'];
        for (let buffer in error) {
          $('#invalid-feedback-' + buffer).text(`${error[buffer]}`);
        }
      }
    });

    $('body').on('click', '.delete-trigger', function(e) {
      e.preventDefault();
      let csrf = $(`@csrf`);
      let route = "{{ route('barang.index') }}";
      dataId = $(this).data('id');
      let res = request(`${route}/${dataId}`, 'delete', csrf.serialize());
      location.reload();
    });

  });

  let table = $('table').DataTable({
    "info": false,
    "paging": true,
    "lengthChange": false,
    "pageLength": 11,
    "dom": 'lrtip',
    "language": {
        "emptyTable": "<div class='py-1 text-center'>Tidak ada data di dalam tabel</div>",
        "paginate": {
            "previous": "<i class='ti-angle-left'></i>",
            "next": "<i class='ti-angle-right'></i>"
        }
    },
    "createdRow": function(r) {
        $(r).children().addClass('py-2 border-0');
    },
    "preDrawCallback": function(s) {
        $('table tbody').hide();
    },
    "drawCallback": function() {
        $('ul.pagination').addClass('justify-content-center my-2');
        $('a.page-link').addClass('mx-1');
        $('table tbody').fadeIn(700);
    }
  });

</script>
@endpush