<!DOCTYPE html>
<html lang="en">
<head>

    <title>
    @yield('title')
</title>

<link rel="icon" type="image/jpg" href="img/sees.png"/>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{csrf_token()}}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('../../plugins/summernote/summernote-bs4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('../../js/buttons.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('../../js/dataTables.bootstrap4.min.js') }}">
  
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false&language=en"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
<!--

-->
@livewireStyles
<style>
    #mapa { height: 500px; }

.fakeimg {
    height: 200px;
    background: #aaa;
}

.guinda{
    color:#802434;
}
.pagination{
    font-size:10px;
}
.page-item , .active{
    color:gray;
}
.letraa{
    font-size:12px;
}

.dorado{
    color:#D4AF37;
}

.colorBG{
    background-color: #C5C5C5;
    color: white;
}

.rcorner {
  border-radius: 30px;
}

@media (min-width: 576px) {
    .tx { font-size: 8px; }
    .tx2 { font-size: 8px; }
    .anch {width:30% }
    .anchlog { width:30px; }
}
@media (min-width: 768px) {
    .tx { font-size: 10px; }
    .tx2 { font-size: 8px; }
    .anch { width:30% }
    .anchlog { width:30px; }
}
@media (min-width: 992px) {
    .tx { font-size: 10px; }
    .tx2 { font-size: 10px; }
    .anch { width:30% }
    .anchlog { width:30px; }
}
@media (min-width: 1200px) {
    .tx { font-size: 18px; }
    .tx2 { font-size: 14px; }
    .anch { width:30% }
    .anchlog { width:50px; }
}

img.zoom {
    -webkit-transition: all .2s ease-in-out;
    -moz-transition: all .2s ease-in-out;
    -o-transition: all .2s ease-in-out;
    -ms-transition: all .2s ease-in-out;
}
 
.transition {
    -webkit-transform: scale(1.8); 
    -moz-transform: scale(1.8);
    -o-transform: scale(1.8);
    transform: scale(1.8);
}
</style>

</head>
<body>

@yield('header')
<header class="main-header"  style="border:0px;" >
    <div class="row container-fluid">
        <div class="col-12 bg-light shadow-sm" >
            <div class="d-flex-center" style='text-align:center';>
                @yield('header_img')
                <img src="img/log_edomex_inicio.png" class="anch img-fluid" >&nbsp;
                <b style="color:#D4AF37; font-family: Italic; font-size:40px;">  
                <i class="guinda">SEIEM</i> </b>
            </div>
        </div>
    </div>
</header>

@yield('content')
<div class="row" style=" margin-top:50px;">
    <div class="col-sm-1">    </div>
    <div class="col-sm-10  " >
        <center>
            <b class="guinda" style="font-family: Italic; font-size:20px;">
                Catálogo de programas de posgrado de instituciones públicas y particulares para el desarrollo profesional
            </b>
        </center><br>
        @yield('content_text')
    </div>

    <div class="col-sm-1">    </div>
</div>


<div class="row" style=" margin-top:50px;">
    <div class="col-sm-1"></div>
    <div class="col-sm-10">
        @yield('content_principal')
    </div>
    <div class="col-sm-1"></div>
</div>


@yield('footer')
<footer class="main-footer "  style="font-size:10px; margin-top:150px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-7 shadow" style="color:#D4AF37; background-color:#802434; border: .5px solid white;">
                <div class="flex-right" align="right">
                    <p>
                    <br><b>Gobierno del Estado de México
                    <br>Secretaría de Educación
                    <br>Servicios Educativos Integrados al Estado de México
                    <br>Dirección de Educación Siuperior</b>
                    <br>Catálogo de programas de posgrado de instituciones públicas y particulares para el desarrollo profesional
                    </p>
                </div>
            </div>

            <div class="col-5 shadow" style="color:#D4AF37; background-color:#802434; border: .5px solid white;">
                <div class="flex-right">
                <br>
                    <a  href="https://goo.gl/maps/FykCgWiEd7CsyMZq8"
                        target="_blank"
                        style="text-decoration: none; color:#D4AF37;">
                        <i class="fa fa-map-marker" style="color:#D4AF37;"></i>&nbsp;
                            Profesor Agripín Garcia Estrada No. 1306<br>
                            Santa Cruz Atzcapotzaltongo. Toluca, México. C.P. 50030
                    </a>
                <br>
                    <a  href="tel:+527222651600" target="_blank"
                        style="text-decoration: none; color:#D4AF37;">
                        <i class="fa fa-phone"></i>&nbsp;
                        Tel: 01 (722) 279 77 00 Ext. 1505
                    <br>
                    <a  class="tx"
                        href="https://www.facebook.com/SEIedomex/?ref=ts&amp%3Bfref=ts"
                        target="_blank"
                        style="text-decoration: none; color:#D4AF37;">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a  class="tx"
                        href="https://twitter.com/SEIEM_"
                        target="_blank"
                        style="text-decoration: none; color:#D4AF37;">
                        <i class="fa fa-twitter-square"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
@livewireScripts
</body>
</html>

<script>
    $(document).ready(function(){
        $('.zoom').hover(function() {
            $(this).addClass('transition');
        }, function() {
            $(this).removeClass('transition');
        });
    });
</script>

  <script src="{{ asset('../../js/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('../../js/dataTables.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('../../js/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('../../js/responsive.bootstrap4.min.js') }}"></script>
  <script src="{{ asset('../../js/dataTables.buttons.min.js') }}"></script>
  <script src="{{ asset('../../js/buttons.bootstrap4.min.js') }}"></script>

  <script src="{{ asset('../../js/vfs_fonts.js') }}"></script>
  <script src="{{ asset('../../js/buttons.flash.min.js') }}"></script>
  <script src="{{ asset('../../js/buttons.html5.min.js') }}"></script>
  <script src="{{ asset('../../js/buttons.print.min.js') }}"></script>
  <script src="{{ asset('../../js/buttons.colVis.min.js') }}"></script>
  <script src="{{ asset('../../js/pdfmake.min.js') }}"></script>
