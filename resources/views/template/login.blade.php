<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta name="csrf-token" content="{{csrf_token()}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!------ Include the above in your HEAD tag ---------->
<title>
    @yield('title')
</title>

@livewireStyles
</head>

<style type="text/css">
body{
    /*background-image: url('img/edom.png');*/
    background-repeat: no-repeat;
    background-position: top;
    background-color: transparent;
}

html,body{
    position: relative;
    height: 100%;
}

.login-container{
    position: relative;
    width: 360px;
    margin: 40px auto;
    padding: 10px 10px 20px;
    background: #fff;
    border: 1px solid #ccc;
}

#output{
    position: absolute;
    width: 300px;
    top: -75px;
    left: 0;
    color: #fff;
}

#output.alert-success{
    background: rgb(25, 204, 25);
}

#output.alert-danger{
    background: rgb(228, 105, 105);
}

.login-container::before,.login-container::after{
    content: "";
    position: absolute;
    width: 100%;height: 100%;
    top: 3.5px;left: 0;
    background: #fff;
    z-index: -1;
    -webkit-transform: rotateZ(4deg);
    -moz-transform: rotateZ(4deg);
    -ms-transform: rotateZ(4deg);
    border: 1px solid #ccc;
}

.login-container::after{
    top: 5px;
    z-index: -2;
    -webkit-transform: rotateZ(-2deg);
     -moz-transform: rotateZ(-2deg);
      -ms-transform: rotateZ(-2deg);
}

.avatar{
    background-image: url('img/escolares.png');
    background-repeat: no-repeat;
    width: 100px;
    height: 100px;
    margin: 10px auto 20px;
    border-radius: 100%;
    border: 1px solid #802434;
    background-size: cover;
}

.form-box input:focus{
    outline: 0;
    background: #eee;
}

.form-box input[type="text"]{
    border-radius: 5px 5px 0 0;
}

.form-box input[type="password"]{
    border-radius: 0 0 5px 5px;
    border-top: 0;
}


.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    transform: translateY(20px);
}

100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    transform: translateY(0);
  }
}

@keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translateY(20px);
    -ms-transform: translateY(20px);
    transform: translateY(20px);
    }

  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
    -ms-transform: translateY(0);
    transform: translateY(0);
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp;
}

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
    background-color: #802434;
    color: #D4AF37;
}

.rcorner {
  border-radius: 30px;
}

@media (min-width: 576px) {
    .tx { font-size: 8px; }
    .tx2 { font-size: 8px; }
    .anch {width:20% }
    .anchlog { width:20px; }
}
@media (min-width: 768px) {
    .tx { font-size: 10px; }
    .tx2 { font-size: 8px; }
    .anch { width:20% }
    .anchlog { width:20px; }
}
@media (min-width: 992px) {
    .tx { font-size: 10px; }
    .tx2 { font-size: 10px; }
    .anch { width:20% }
    .anchlog { width:20px; }
}
@media (min-width: 1200px) {
    .tx { font-size: 18px; }
    .tx2 { font-size: 14px; }
    .anch { width:20% }
    .anchlog { width:20px; }
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

@yield('title_content')
<div class="row" style=" margin-top:50px;">
    <div class="col-sm-1">    </div>
    <div class="col-sm-10  " >
        <center>
            <b class="guinda" style="font-family: Italic; font-size:20px;">
                Sistema de registro de programas de posgrado de instituciones públicas y particulares para el desarrollo profesional
            </b>
        </center>
    </div>
    <div class="col-sm-1">    </div>
</div>


@yield('content')
<div class="container ">
    <div class="login-container shadow">
        <div class="form-box">
            <div class="container-fluid" style="background-image: url('img/edom.png');">
                <BR>
                @yield('login_restore')
            </div>
        </div>
    </div>
</div>
        

@yield('footer')
<footer class="main-footer "  style="font-size:10px; margin-top:140px;">
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
                    <br> <b>SEIEM  | Copyright &#169; @php echo date('Y') @endphp</b>
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
<script>
    $(document).ready(function() {
    $("#show_hide_password a").on('click', function(event) {
        event.preventDefault();
        if($('#show_hide_password input').attr("type") == "text"){
            $('#show_hide_password input').attr('type', 'password');
            $('#show_hide_password i').addClass( "fa-eye-slash" );
            $('#show_hide_password i').removeClass( "fa-eye" );
        }else if($('#show_hide_password input').attr("type") == "password"){
            $('#show_hide_password input').attr('type', 'text');
            $('#show_hide_password i').removeClass( "fa-eye-slash" );
            $('#show_hide_password i').addClass( "fa-eye" );
        }
    });
});
</script>

@livewireScripts
</body>
</html>


                    
