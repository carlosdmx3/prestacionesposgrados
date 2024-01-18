<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    @yield('title')

        @if (Route::has('login'))
                @auth
                    {{ Auth::user()->name }} {{ Auth::user()->oapellidopaterno }} 
                @else
                @endauth
        @endif
  </title>

<link rel="icon" type="image/jpg" href="img/IconEvaluacion.png"/>



  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('plugins/jqvmap/jqvmap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('js/buttons.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('js/dataTables.bootstrap4.min.js') }}">
<!--
-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
  <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.53/build/pdfmake.min.js"></script>
  <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.53/build/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<!--
-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

  <!-- DropZone -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="{{ asset('/js/jquery-3.7.1.min.js') }}"></script>
  
  @livewireStyles
  <style>
.txresp {
font-size: 20vw;
}

.guinda{
    color:black;
}

.guinda2{
    color:#802434;
}
.form-control{
    font-size:12px;
}

.dorado{
    color:#D4AF37;
}

.colorBG{
    background-color: #ADADAD;
    color: black;
}
.colorBG2{
    background-color: #802434;
    color: #D4AF37;
}
  .bordedo{
    border: .5px solid #802434; 
    color:#D4AF37; 
  }

@keyframes expand {
  from {width:0%;}
  to {}
}

.progress-bar{
  animation-name:expand;
  animation-duration:1s;
  animation-iteration-count:1;
}
  </style>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" >

      <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-light navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
              <li class="nav-item" style="font-size:12px;">
                <a class="nav-link" data-widget="pushmenu" href="" role="button"><i class="fas fa-bars"></i></a>
              </li>
        </ul>

        <ul class="navbar-nav">
            <li class="nav-item" style="font-size:12px;">
                <a class="brand-link">
                    <span class="brand-text font-weight-light">
                      <img src="img/log_edomex.png" class="container-fluid" >
                    </span>
                  </a>
            </li>
        </ul>


        <ul class="navbar-nav ml-auto">
            <li class="nav-item " >
                <a  class="nav-link" style="font-size:14px;">
                    <span class="d-none d-md-inline">
                            <b class="dorado"><span class="fas fa-user-circle"></span>  
                                <span class="guinda">Bienvenido:</span></b>
                            <b class="dorado">  
                        @auth
                            {{ Auth::user()->name }} {{ Auth::user()->oapellidopaterno }} {{ Auth::user()->oapellidomaterno }} 
                        @else
                            Invitado
                        @endauth
                            </b>
                    </span>
                </a>
            </li>
            <li></li>
            <li class="nav-item shadow-sm" >
                <a href=""
                   class="nav-link"
                   data-toggle="modal"
                   title="Salir"
                   data-target="#myModalSalirSesion"
                   style="font-size:12px;">
                        <span class="d-none d-md-inline" style="color:red;"> Salir &nbsp;<i class="fas fa-power-off"></i> </span>
                    </a>
              </li>
          </ul>


    </nav>





      <!-- Main Sidebar Container {{ url('/') }} -->
    <aside class="main-sidebar sidebar-light-light elevation-4" >
          <a href="" class="brand-link">
            <span class="brand-text font-weight-light">
                <p> <br></p>
            </span>
          </a>

    <div class="sidebar">
        <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column"
            style="font-size:14px;"
            data-widget="treeview"
            role="menu"
            data-accordion="false">

        @yield('menu')

      </ul>
      </nav>

    </div>
    </aside>




      <!-- The Modal -->
      <div class="modal fade" id="myModalSalirSesion">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
              <span class="tx2 modal-title">Finalizar sesión</span>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <button type="button"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="btn btn-outline-danger btn-sm btn-block" >
                    Salir &nbsp; <i class="nav-icon fas fa-sign-out-alt"></i>&nbsp;
                </button>
                <form   id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-secondary btn-sm btn-block" data-dismiss="modal">
                     Cerrar ventana <i class="fas fa-times"></i>
                </button>
            </div>

          </div>
        </div>
      </div>

    <div class="content-wrapper"> <!-- Content Wrapper. Contains page content -->
      <div class="content-header"> <!-- Content Header (Page header) -->
        <div class="container-fluid" class="align-center">

        @yield('content')

        </div><!-- /.container-fluid -->
      </div><!-- /.content-header -->
    </div>


  <footer class="main-footer"  style="font-size:10px;">
  <div class="container">
     <div class="row">
    </div>
  </div>
  </footer>

</div>
<!-- ./wrapper -->
@yield('tablaDatos')

@yield('los_js')

@livewireScripts

</body>
</html>

  <!-- jQuery -->
  <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- ChartJS -->
  <script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
  <!-- JQVMap -->
  <script src="{{ asset('plugins/jqvmap/jquery.vmap.min.js') }}"></script>
  <script src="{{ asset('plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
  <!-- jQuery Knob Chart -->
  <script src="{{ asset('plugins/jquery-knob/jquery.knob.min.js') }}"></script>
  <!-- daterangepicker -->
  <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
  <script src="{{ asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
  <!-- Summernote -->
  <script src="{{ asset('plugins/summernote/summernote-bs4.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('dist/js/adminlte.js') }}"></script>
  <!-- AdminLTE dastaTables -->
  <script src="{{ asset('js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('js/buttons.bootstrap4.min.js') }}"></script>

  <script src="{{ asset('js/vfs_fonts.js') }}"></script>
  <script src="{{ asset('js/buttons.flash.min.js') }}"></script>
  <script src="{{ asset('js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('js/buttons.colVis.min.js') }}"></script>
  <script src="{{ asset('js/pdfmake.min.js') }}"></script>
