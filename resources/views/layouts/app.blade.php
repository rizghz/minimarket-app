<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ mix('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color.css') }}">
    <style>
        
      #loader {
        transition: all 0.3s ease-in-out;
        opacity: 1;
        visibility: visible;
        position: fixed;
        height: 100vh;
        width: 100%;
        background: #2E3440;
        z-index: 90000;
      }
  
      #loader.fadeOut {
        opacity: 0;
        visibility: hidden;
      }
  
      .spinner {
        width: 40px;
        height: 40px;
        position: absolute;
        top: calc(50% - 20px);
        left: calc(50% - 20px);
        background-color: #ECEFF4;
        border-radius: 100%;
        -webkit-animation: sk-scaleout 1.0s infinite ease-in-out;
        animation: sk-scaleout 1.0s infinite ease-in-out;
      }
  
      @-webkit-keyframes sk-scaleout {
        0% { -webkit-transform: scale(0) }
        100% {
          -webkit-transform: scale(1.0);
          opacity: 0;
        }
      }
  
      @keyframes sk-scaleout {
        0% {
          -webkit-transform: scale(0);
          transform: scale(0);
        } 100% {
          -webkit-transform: scale(1.0);
          transform: scale(1.0);
          opacity: 0;
        }
      }

    </style>
  </head>
  <body class="app">
    
    <!-- loader -->
    <div id='loader'>
      <div class="spinner"></div>
    </div>
    <script>
      window.addEventListener('load', () => {
        const loader = document.getElementById('loader');
        setTimeout(() => {
            loader.classList.add('fadeOut');
        }, 300);
      });
    </script>
    <!-- akhir loader -->

    <!-- app content -->
    <div class="wrapper">
      
      <!-- sidebar -->
      @include('layouts.sidebar')
      <!-- akhir sidebar -->
      
      <!-- main -->
      <div class="page-container">
        
        <!-- navbar -->
        @include('layouts.navbar')
        <!-- akhir navbar -->
        
        <!-- main content -->
        <main class='main-content enigma-dark-bg-2 pX-30 pT-100'>
          <div id='mainContent'>
            @yield('content')
          </div>
        </main>
        <!-- akhir main content -->
        
        <!-- footer -->
        @include('layouts.footer')
        <!-- akhir footer -->
      
      </div>
      <!-- akhir main -->
    
    </div>
    <!-- akhir app content -->

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="{{ mix('js/main.js') }}"></script>
    <script>
      function request(route, type, data = null) {
        let buffer = null;
        buffer = $.ajax({
          async: false,
          url: route,
          type: type,
          data: data,
        }).always(function(a, b, c) { console.log(c); });
        return buffer;
      };
      function IntToRp(n) {
        let rupiah = '';		
	      let rev = n.toString().split('').reverse().join('');
	      for (let i = 0; i < rev.length; i++) {
          if (i % 3 == 0) {
            rupiah += rev.substr(i,3)+'.';
          }
        }
	      rupiah = rupiah.split('', rupiah.length - 1).reverse().join('');
        return `Rp${rupiah.length < 1 ? "0" : rupiah},-`;
      }
      function RpToInt(n) {
        return parseInt(n.replace(/,.*|[^0-9]/g, ''), 10);
      }
      const sweetalert = Swal.mixin({
        customClass: {
          confirmButton: 'btn btn-success mx-1',
          cancelButton: 'btn btn-danger mx-1'
        },
        buttonsStyling: false
      });
    </script>
    @stack('script')
    
  </body>
</html>