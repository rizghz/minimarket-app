@extends('layouts.app')

@section('title', 'Mini Market - Supplier')

@section('content')

  <div class="row">
    <div class="col-md-12">
      <div class="enigma-dark-bg-1 shadow bgc-white bd bdrs-3 p-20 mB-20">
        @include('master.supplier.components.table')
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
  
  let asyncReload = (route) => {
    $.get({ 
        url: route, 
        success: function(result) {
            $('.main-content').html($(result).find('.mainContent'));
        }
    });
  };

  let table = $('table').DataTable({
        "info": false, 
        "paging": true,
        "lengthChange": false,
        "pageLength": 13,
        "dom": 'lrtip', 
        "language": {
            "emptyTable": "<div class='py-1'>Tidak ada data di dalam tabel</div>",
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

    $('td.dataTables_empty').addClass('py-2 border-0');

</script>
@endpush