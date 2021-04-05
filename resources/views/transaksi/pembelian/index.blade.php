@extends('layouts.app')

@section('title', 'Mini Market - Pembelian')

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="card enigma-dark-bg-1">
      <div class="card-header text-white">Pembelian Barang</div>
      <div class="card-body">
        @include('transaksi.pembelian.components.form.pembelian')
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="enigma-dark-bg-1 bgc-white bd bdrs-3 p-20 mY-30">
      @include('transaksi.pembelian.components.dialog.barang')
      <form class="form-pembelian">
        @include('transaksi.pembelian.components.table.pembelian')
      </form>
    </div>
  </div>
</div>
<div class="row mr-2">
  <div class="col-md-12">
    <form class="form-pembelian">
      <div class="form-group row">

        <!-- label form -->
        <label for="supplier" class="col-sm-2 offset-8 col-form-label text-right text-white">
          Total Harga
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
    let data = $('.form-pembelian').serialize();
    let csrf = $(`@csrf`).serialize();
    let route = "{{ route('pembelian.store') }}";
    let res = request(route, "post", `${data}&${csrf}`);
    console.log(res);
  });

  $("body").on("click", "#btn-pilih-barang", function(e) {
    e.preventDefault();
    
    $(".modal").modal("hide");
    
    let data = {
      barang: $(this).data("barang"),
      produk: $(this).data("produk")
    };
    
    
    let kode    = `<div class="py-2 pl-3 data">${data.barang.kode}</div>`;
    let nama    = `<div class="py-2 data">${data.barang.nama}</div>`;
    let produk  = `<div class="py-1">
                     <select id="produk_id" name="produk_id[]"
                             class="form-control custom-select input enigma-dark-bg-2 text-white border-0 data">`
                       for (let i = 0; i < data.produk.length; i++) {
                         produk += `<option value="${data.produk[i].id}" data-harga="${data.produk[i].harga_jual}">
                                      ${data.produk[i].nama}
                                    </option>`
                       }
                       produk += `</select>
                                 </div>`;
    let harga = "";
    if (data.produk[0] == null) {
      harga = `<div id="harga" class="py-2 data">0</div>`;
    } else {
      harga = `<div id="harga" class="py-2 data">${data.produk[0].harga_jual}</div>`;
    }
    let qty = `<div class="py-1">
                 <input type="number" name="qty[]" id="qty" value="1" min="1"
                        class="form-control enigma-dark-bg-2 border-0 text-white data">
               </div>`;
    let total = "";
    if (data.produk[0] == null) {
      total   = `<div id="total" class="py-2 data">0</div>`;
    } else {
      total   = `<div id="total" class="py-2 data">${data.produk[0].harga_jual}</div>`;
    }
    let bDelete = `<div class="py-2">
                     <button class='btn btn-danger btn-sm px-2 py-1 rounded' 
                             id='delete-barang'>
                       <i class='fa fa-times'></i>
                     </button>
                   </div>`;

    let t = $(table.context[1].nTable).DataTable();
    t.row.add([
      kode, nama, produk, harga, qty, total, bDelete
    ]).draw();

    totalHarga += data.produk[0].harga_jual;
    $('#total_harga').val(totalHarga);

    // let total_harga = t.column(5).data();
    // let buffer = 0;
    // for (let i = 0; i < total_harga.length; i++) {
    //   buffer += parseInt($(total_harga[i]).text());
    //   $('#total_harga').val(buffer);
    // }
    
  });

  $('body').on('click', '#delete-barang', function(e) {
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

  $('body').on('change', '#produk_id', function(e) {
    let column = $(this).closest('tr').find('td');
    let harga = $(this).find('option:selected').data('harga');
    column.find('#harga').text(harga);
    column.find('#total').text(harga);
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

});
</script>
@endpush