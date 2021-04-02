@extends('layouts.app')

@section('title', 'Mini Market - Barang')

@section('content')

  <button class="btn btn-lg enigma-dark-bg-1 text-white rounded mb-4 tambah-trigger"
          data-target="#modal-tambah"
          data-toggle="modal">
    <i class="fa fa-plus mx-1"></i>
    <span class="d-none d-md-inline">Tambah</span>
  </button>

  <div class="row">
    <div class="col-md-12">
      <div class="enigma-dark-bg-1 shadow bgc-white bd bdrs-3 p-20 mB-20">
        @include('master.barang.components.dialog.tambah')
        @include('master.barang.components.dialog.update')
        @include('master.barang.components.table.barang')
      </div>
    </div>
  </div>

@endsection

@push('script')
<script>
$(() => {

  let dataId = "";

  const input = {
    tambah: $("#form-tambah").find(".input"),
    update: $("#form-update").find(".input")
  };

  $("body").on("click", ".tambah-trigger", function(e) {
    e.preventDefault();
    for (let i = 0; i < input.tambah.length; i++) {
      input.tambah.eq(i).val(null).trigger("change");
    }
  });

  $("body").on("click", ".update-trigger", function(e) {
    e.preventDefault();
    let data = $(this).data();
    dataId = data.id;
    for (let i = 0; i < input.update.length; i++) {
      input.update.eq(i).val(
        data[input.update.eq(i).attr("name")]
      ).trigger("change");
    }
  });

  $("body").on("click", "#btn-submit", function(e) {
    e.preventDefault();
    let form  = $(this)[0].form;
    let data  = $(form).serialize();
    let route = form.action + "/" + dataId;
    let res   = request(route, "post", data);
    if (res.status == 200) {
      result = parseInt(res.responseText);
      if (!result) {
        sweetalert.fire({
          title : "Gagal",
          text  : "Gagal",
          icon  : "failed",
        }).then((result) => {
          if (sweetalert.DismissReason.backdrop) {
            location.reload();
          }
        });
      }
      sweetalert.fire({
        title : "Berhasil",
        text  : "Berhasil",
        icon  : "success",
      }).then((result) => {
        if (sweetalert.DismissReason.backdrop) {
          location.reload();
        }
      });
    } else {
      let error = res.responseJSON.errors;
      for (let buffer in error) {
        $("#feedback-" + buffer).text(`${error[buffer]}`);
      }
    }
  });

  $("body").on("click", ".delete-trigger", function(e) {
    e.preventDefault();
    dataId    = $(this).data("id");
    let csrf  = $(`@csrf`).serialize();
    let route = "{{ route('barang.index') }}";
    Swal.fire({
      title : "Apakah kamu yakin?",
      text  : "Kamu tidak akan dapat mengembalikan data ini!",
      icon  : "warning",
      showCancelButton   : true,
      confirmButtonColor : "#3085d6",
      cancelButtonColor  : "#d33",
      confirmButtonText  : "Ya, hapus!"
    }).then((result) => {
      if (result.isConfirmed) {
        let res = request(`${route}/${dataId}`, "delete", csrf);
        if (res.status == 200) {
          result = parseInt(res.responseText);
          if (!result) {
            sweetalert.fire({
              title : "Gagal",
              text  : "Gagal",
              icon  : "failed",
            }).then((result) => {
              if (sweetalert.DismissReason.backdrop) {
                location.reload();
              }
            });
          }
          sweetalert.fire({
            title : "Berhasil",
            text  : "Berhasil",
            icon  : "success",
          }).then((result) => {
            if (sweetalert.DismissReason.backdrop) {
              location.reload();
            }
          });
        }
      }
    });
  });

  $("body").on("hidden.bs.modal", ".modal", function(e) {
    dataId = "";
    let buffer = $(".invalid");
    for (let i = 0; i < buffer.length; i++) {
      buffer.eq(i).text(null).trigger("change");
    }
  });

  let table = $("table").DataTable({
    "info"         : false,
    "paging"       : true,
    "lengthChange" : false,
    "pageLength"   : 25,
    "dom"          : "lrtip",
    "language" : {
      "emptyTable": "<div class='py-1 text-center'>Tidak ada data di dalam tabel</div>",
      "paginate": {
        "previous": "<i class='ti-angle-left'></i>",
          "next": "<i class='ti-angle-right'></i>"
        }
    },
    "createdRow" : function(r) {
      $(r).children().addClass('py-2 border-0');
    },
    "preDrawCallback" : function(s) {
      $('table tbody').hide();
    },
    "drawCallback": function() {
      $('ul.pagination').addClass('justify-content-center my-2');
      $('a.page-link').addClass('mx-1');
      $('table tbody').fadeIn(700);
    }
  });

});
</script>
@endpush