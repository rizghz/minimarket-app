@extends('layouts.app')

@section('title', 'Mini Market - Penjualan')

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="card enigma-dark-bg-1">
      <div class="card-header text-white">Penjualan Barang</div>
      <div class="card-body">
        @include('transaksi.penjualan.components.form.penjualan')
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="enigma-dark-bg-1 shadow bgc-white bd bdrs-3 px-0 pt-1 pb-3 mY-35">
      @include('transaksi.penjualan.components.dialog.barang')
      <form class="form-penjualan">
        @include('transaksi.penjualan.components.table.penjualan')
      </form>
    </div>
  </div>
</div>

<div class="row mr-2">
  <div class="col-md-12">
    <form class="form-penjualan">
      <div class="form-group row">

        <!-- label form -->
        <label for="total" class="col-sm-2 offset-8 col-form-label text-right text-white">
          Total
        </label>
        <!-- akhir label form -->

        <!-- input form -->
        <div class="col-sm-2">
          <div class="input-group">
            <input type="text" name="total_harga" id="total_harga" value="0" readonly
                   class="form-control enigma-dark-bg-1 text-white border-0 data">
          </div>
        </div>
        <!-- akhir input form -->

      </div>
      <div class="form-group row">

        <!-- label form -->
        <label for="terima" class="col-sm-2 offset-8 col-form-label text-right text-white">
          Terima
        </label>
        <!-- akhir label form -->

        <!-- input form -->
        <div class="col-sm-2">
          <div class="input-group">
            <input type="text" name="terima" id="terima" value="0"
                   class="form-control enigma-dark-bg-1 text-white border-0 data">
          </div>
        </div>
        <!-- akhir input form -->

      </div>
      <div class="form-group row">

        <!-- label form -->
        <label for="kembali" class="col-sm-2 offset-8 col-form-label text-right text-white">
          Kembali
        </label>
        <!-- akhir label form -->

        <!-- input form -->
        <div class="col-sm-2">
          <div class="input-group">
            <input type="text" name="kembali" id="kembali" value="0" readonly
                   class="form-control enigma-dark-bg-1 text-white border-0 data">
          </div>
        </div>
        <!-- akhir input form -->

      </div>
    </form>
  </div>
</div>

<div class="row mr-2">
  <div class="col-md-12">
    <div class="form-group row">
      <div class="col-sm-2 offset-10">
        <button id="simpan-transaksi" type="button" class="btn btn-primary">Simpan Transaksi</button>
      </div>
    </div>
  </div>
</div>

@endsection

@push('script')
<script>
$(() => {

  $('body').on('click', '#simpan-transaksi', function(e) {
    e.preventDefault();
    let data = $('.form-penjualan').serialize();
    let csrf = $(`@csrf`).serialize();
    let route = "{{ route('penjualan.store') }}";
    let res = request(route, "post", `${data}&${csrf}`);
    console.log(res);
  });

  $("body").on("click", "#btn-pilih-barang", function(e) {
    e.preventDefault();
    
    $(".modal").modal("hide");
    $(".modal-backdrop").fadeOut();
    
    let data = {
      produk: $(this).data("produk"),
      barang: $(this).data("barang")
    };

    let kode    = `<div class="py-2 pl-3 data">${data.produk.kode}</div>`;
    let nama    = `<div class="py-2 data">${data.produk.nama}</div>`;
    let barang  = `<div class="py-1">
                     <select id="barang_id" name="barang_id[]"
                             class="form-control custom-select input enigma-dark-bg-2 text-white border-0 data">`
                       for (let i = 0; i < data.barang.length; i++) {
                         barang += `<option value="${data.barang[i].id}" data-harga="${data.barang[i].harga_jual}">
                                      ${data.barang[i].nama}
                                    </option>`
                       }
                       barang += `</select>
                                 </div>`;
    let harga = "";
    if (data.barang[0] == null) {
      harga = `<div id="harga" class="py-2 data">0</div>`;
    } else {
      harga = `<div id="harga" class="py-2 data">${data.barang[0].harga_jual}</div>`;
    }
    let qty = `<div class="py-1">
                 <input type="number" name="qty[]" id="qty" value="1" min="1"
                        class="form-control enigma-dark-bg-2 border-0 text-white data">
               </div>`;
    let total = "";
    if (data.barang[0] == null) {
      total   = `<div id="total" class="py-2 data">0</div>`;
    } else {
      total   = `<div id="total" class="py-2 data">${data.barang[0].harga_jual}</div>`;
    }
    let bDelete = `<div class="py-2">
                     <button class='btn btn-danger btn-sm px-2 py-1 rounded' 
                             id='delete-produk'>
                       <i class='fa fa-times'></i>
                     </button>
                   </div>`;

    let t = $(table.context[1].nTable).DataTable();
    t.row.add([
      kode, nama, barang, harga, qty, total, bDelete
    ]).draw();

    totalHarga += data.barang[0].harga_jual;
    $('#total_harga').val(totalHarga);

    // let total_harga = t.column(5).data();
    // let buffer = 0;
    // for (let i = 0; i < total_harga.length; i++) {
    //   buffer += parseInt($(total_harga[i]).text());
    //   $('#total_harga').val(buffer);
    // }
    
  });

  $('body').on('click', '#delete-produk', function(e) {
    e.preventDefault();
    let baris = $(this).parent('div').parent('td').parent('tr');
    let t = $(table.context[1].nTable).DataTable();
    t.row(baris).remove().draw();
    totalHarga -= parseInt(baris.find('#total').text());
    $('#total_harga').val(
      // (parseInt($('#total_harga').val()) - parseInt(baris.find('#total').text()))
      totalHarga
    );
  });

  var totalHarga = 0;
  function subTotal(e) {
    let column = e.closest('tr').find('td');
    let sub_total_awal = column.find('#total').text();
    let harga = column.find('#harga').text();
    let qty = e.val();
    column.find('#total').text(
      (parseInt(harga) * parseInt(qty))
    );
    let subtotal = column.find('#total').text();
    totalHarga += parseInt(subtotal) - parseInt(sub_total_awal);
    $('#total_harga').val(totalHarga);
  }

  $('body').on('change', '#qty', function(e) {
    e.preventDefault();
    subTotal($(this));
  });

  $('body').on('change', '#barang_id', function(e) {
    let column = $(this).closest('tr').find('td');
    let harga = $(this).find('option:selected').data('harga');
    column.find('#harga').text(harga);
    column.find('#total').text(harga);
  });

  $('body').on('keyup', '#terima', function() {
    let terima = parseInt($('#terima').val());
    let totalHarga = parseInt($('#total_harga').val());
    let buffer = (terima - totalHarga);
    if (!($(this).val() == "") && (terima < totalHarga)) {
      $('#kembali').val("kurang");
    }
    if (!($(this).val() == "") && (terima >= totalHarga)) {
      $('#kembali').val(buffer);
    }
  });

  var table = $("table").DataTable({
    "info"         : false,
    "paging"       : true,
    "lengthChange" : false,
    "pageLength"   : 25,
    "dom"          : "lrtip",
    "language" : {
      "emptyTable": "<div class='py-2 text-center'>Tidak ada data di dalam tabel</div>",
      "paginate": {
        "previous": "<i class='ti-angle-left'></i>",
          "next": "<i class='ti-angle-right'></i>"
        }
    },
    "createdRow" : function(r) {
      $(r).children().addClass('border-0');
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

  $('#customer_id').select2({
    width: "100%",
    selectionCssClass: "enigma-dark-bg-2 text-white border-0",
    dropdownCssClass: "enigma-dark-bg-2 text-white border-0"
  });
  
  $('.select2-selection__rendered').addClass('text-white');
  
  $('body').on('click', '.select2-selection', function(e) {
    $('.select2-search__field').addClass('enigma-dark-bg-3 text-white border-0');
  });
  
});
</script>
@endpush