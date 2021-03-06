<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <link rel="apple-touch-icon" sizes="76x76" href="/admin/img/apple-icon.png">
  <link rel="icon" type="image/png" href="/admin/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

  <title>@yield('title')</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="{{ asset('/admin/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ asset('/admin/css/paper-dashboard.css?v=2.0.0') }}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="/admin/demo/demo.css" rel="stylesheet" />

  @stack('css')
</head>

<body class="">
  <div class="wrapper ">

    @include('admin/inc/sidebar')

    <div class="main-panel">

     @include('admin/inc/navbar')

     <div class="content">
       
      <div class="row">
        <div class="col-md-6">
          @include('admin/inc/errors')
        </div>
      </div>

        @yield('content')
    
     </div>   

     {{-- @yield('another_content') --}}

     @include('admin/inc/footer')


    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('/admin/js/core/jquery.min.js') }}"></script>
  <script src="{{ asset('/admin/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('/admin/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/admin/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="{{ asset('/admin/js/plugins/chartjs.min.js') }}"></script>
  <!--  Notifications Plugin    -->
  <script src="{{ asset('/admin/js/plugins/bootstrap-notify.js') }}"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('/admin/js/paper-dashboard.min.js?v=2.0.0') }}" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  {{-- <script src="/admin/demo/demo.js"></script> --}}
  {{-- <script>
    $(document).ready(function() {
      demo.initChartsPages();
    });
  </script> --}}

  @stack('js')
</body>

</html>