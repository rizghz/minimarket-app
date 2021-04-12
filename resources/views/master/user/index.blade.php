@extends('layouts.app')

@section('title', 'Mini Market - User')

@section('content')

<button class="btn btn-lg enigma-dark-bg-1 text-white mb-4 trigger"
        data-mode="tambah"
        data-target="#modal-form"
        data-toggle="modal">
  <i class="ti-plus mx-1"></i>
</button>

<div class="row">
  <div class="col-md-12">
    <div class="enigma-dark-bg-1 shadow bgc-white bd bdrs-3 px-0 pt-1 pb-3 mB-10">
      @include('master.user.components.dialog')
      @include('master.user.components.table')
    </div>
  </div>
</div>

@endsection

@push('script')
<script>
$(() => {

  let dataId = "";
  let methodForm = "";
  const input = $("#form-user").find(".input");

  $("body").on("click", ".trigger", function(event) {
    event.preventDefault();
    let mode = $(this).data("mode");
    if (mode == "tambah") {
      $("#modal-label").text("Tambah Data User");
      methodForm = "post";
      for (let i = 0; i < input.length; i++) {
        input.eq(i).val(null).trigger("change");
      }
    }
    if (mode == "edit") {
      $("#modal-label").text("Edit Data User");
      methodForm = "patch";
      let data = $(this).data('user');
      dataId = data.id;
      for (let i = 0; i < input.length; i++) {
        input.eq(i).val(
          data[input.eq(i).attr("name")]
        ).trigger("change");
      }
    }
  });

  $("body").on("click", "#btn-submit", function(e) {
    e.preventDefault();
    let form  = $(this)[0].form;
    let data  = $(form).serialize();
    let route = form.action + "/" + dataId;
    let res   = request(route, methodForm, data);
    if (res.status == 200) {
      result = parseInt(res.responseText);
      if (!result) {
        $(".modal").modal("hide");
        swalert("error", "", "Gagal");
      } else {
        $(".modal").modal("hide");
        swalert("success", "", "Berhasil");
      }
    } else {
      let error = res.responseJSON.errors;
      for (let buffer in error) {
        $("#feedback-" + buffer + ".invalid").text(error[buffer]);
      }
    }
  });

  $("body").on("click", ".delete", function(event) {
    event.preventDefault();
    dataId    = $(this).data("id");
    let csrf  = $(`@csrf`).serialize();
    let route = "{{ route('user.index') }}";
    swconfirm(() => {
      let res = request(`${route}/${dataId}`, "delete", csrf);
      dataId = "";
      if (res.status == 200) {
        result = parseInt(res.responseText);
        if (!result) {
          $(".modal").modal("hide");
          swalert("error", "", "Gagal");
        } else {
          $(".modal").modal("hide");
          swalert("success", "", "Berhasil");
        }
      }
    });
  });

  $("body").on("hidden.bs.modal", ".modal", function(e) {
    dataId = "";
    let buffer = $(".invalid");
    for (let i = 0; i < buffer.length; i++) {
      buffer.eq(i).text("");
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
        "previous": "<i class='ti-angle-left text-white'></i>",
          "next": "<i class='ti-angle-right text-white'></i>"
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