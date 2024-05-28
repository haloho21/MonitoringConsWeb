<!DOCTYPE html>
    <html>
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta http-equiv="cache-control" content="private, max-age=0, no-cache">
            <meta http-equiv="pragma" content="no-cache">
            <meta http-equiv="expires" content="0">
            {{-- <meta http-equiv="refresh" content="5"/> --}}
            <title>Monitoring Project - PTTA</title>
            <!-- Tell the browser to be responsive to screen width -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- jQuery -->
            <script src="{{ url('/AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
            <!-- jQuery UI 1.11.4 -->
            <script src="{{ url('/AdminLTE/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
            <!-- Font Awesome -->
            <link rel="stylesheet" href="{{ asset('/AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <!-- Tempusdominus Bbootstrap 4 -->
            <link rel="stylesheet" href="{{ asset('/AdminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
            <!-- iCheck -->
            <link rel="stylesheet" href="{{ asset('/AdminLTE/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
            <!-- JQVMap -->
            <link rel="stylesheet" href="{{ asset('/AdminLTE/plugins/jqvmap/jqvmap.min.css') }}">
            <!-- Theme style -->
            <link rel="stylesheet" href="{{ asset('/AdminLTE/dist/css/adminlte.min.css') }}">
            <!-- overlayScrollbars -->
            <link rel="stylesheet" href="{{ asset('/AdminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
            <!-- Daterange picker -->
            <link rel="stylesheet" href="{{ asset('/AdminLTE/plugins/daterangepicker/daterangepicker.css') }}">
            <!-- summernote -->
            <link rel="stylesheet" href="{{ asset('/AdminLTE/plugins/summernote/summernote-bs4.css') }}">
            <!-- Google Font: Source Sans Pro -->
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
            <!-- Font Awesome -->
            <link rel="stylesheet" href="{{ asset('/AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <!-- DataTables -->
            <link rel="stylesheet" href="{{ asset('/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
            <link rel="stylesheet" href="{{ asset('/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
            <!-- Theme style -->
            <link rel="stylesheet" href="{{ asset('/AdminLTE/dist/css/adminlte.min.css') }}">
            <!-- Google Font: Source Sans Pro -->
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
            <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
            <!-- ChartJS -->
            <script src="{{ url('/AdminLTE/plugins/chart.js/Chart.min.js') }}"></script>

            <script src="https://unpkg.com/jquery@2.2.4/dist/jquery.js"></script>
            <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
            <link href="https://code.jquery.com/ui/1.11.3/themes/smoothness/jquery-ui.css"/>

            <!-- ALERT PLUGIN -->
                <!-- SweetAlert2 -->
                <script src="{{ url('/AdminLTE/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
                <link rel="stylesheet" href="{{ asset('/AdminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
                <!-- Toastr -->
                <script src="{{ url('/AdminLTE/plugins/toastr/toastr.min.js') }}"></script>

        </head>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('/AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('/AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">


    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/AdminLTE/dist/css/adminlte.min.css') }}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('sweetalert::alert')
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light navhead">
        @include('layouts/main_header')
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <div class="row bungkus" style="background-color: white">
            <!-- Brand Logo -->
            <div class="telkom">
                <img src="{{ url('/AdminLTE/dist/img/logo_ta2.png') }}" alt="TALogo">
            </div>
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
        @include('layouts/sidebar')
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield('content')
    </div>

    <!-- /.content-wrapper -->
    <footer class="main-footer">
        @include('layouts/footer')
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
<!-- ./wrapper -->

<style>
    .telkom{
        margin: auto;
        height: 80%;
        width: 210px;
        background-color: white;
        border-radius: 50px;
        margin-top: 2%;
        margin-bottom: 3%;
        
    }

    .bungkus{
        height: 56px;
    }

    img { 
        width: 100%; 
        height: 100%; 
        object-fit: contain; 
        padding: auto;
    }
    .navhead{
        background-color: rgb(240, 1, 1); /* For browsers that do not support gradients */
            /* background-image: linear-gradient(to bottom left, red, rgb(77, 77, 77)); Standard syntax (must be last) */
        background: linear-gradient(80deg, rgb(240, 0, 0) 0%, rgb(172, 37, 37) 35%, rgb(73, 41, 41) 70%, rgb(41, 34, 34) 100%);
    }
    .warna{
        background-color: #ffffff; /* For browsers that do not support gradients */
            /* background-image: linear-gradient(to bottom left, red, rgb(77, 77, 77)); Standard syntax (must be last) */
        background: linear-gradient(180deg, rgb(255, 255, 255) 0%, rgb(255, 255, 255) 35%, rgb(231, 220, 220) 100%);
    } 
</style>

<script>
    // setTimeout(function(){
    //     window.location.reload(1);
    // }, 50000);
    // clearTimeout(setTimeout());

    var intvrefresh = setInterval(function() {
    // location.reload();
    clearInterval(intvrefresh)
  }, 1000);
</script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ url('/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<!-- Page script -->
<!-- daterange picker -->
<link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
<!-- Sparkline -->
<script src="{{ url('/AdminLTE/plugins/sparklines/sparkline.js') }}"></script>
<!-- JQVMap -->
<script src="{{ url('/AdminLTE/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ url('/AdminLTE/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<!-- jQuery Knob Chart -->
<script src="{{ url('/AdminLTE/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<!-- daterangepicker -->
<script src="{{ url('/AdminLTE/plugins/moment/moment.min.js') }}"></script>
<script src="{{ url('/AdminLTE/plugins/daterangepicker/daterangepicker.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ url('/AdminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
<!-- Summernote -->
<script src="{{ url('/AdminLTE/plugins/summernote/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ url('/AdminLTE/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ url('/AdminLTE/dist/js/adminlte.js') }}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ url('/AdminLTE/dist/js/pages/dashboard.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('/AdminLTE/dist/js/demo.js') }}"></script>

<!-- DataTables -->
<script src="{{ url('/AdminLTE/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('/AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ url('/AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ url('/AdminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
</body>
</html>
