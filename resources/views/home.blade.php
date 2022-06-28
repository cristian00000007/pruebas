@extends('layouts.indexI')

@section('title', 'Home')

@section('content')

<head>



    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <!-- responsive-->
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->
<body class="main-layout">


    <div class="wrapper">

    <div id="content">
    <!-- header -->


    <!-- end header -->
    <!-- start slider section -->
    <div class="slider_section">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <div id="main_slider" class="carousel vert slide" data-ride="carousel" data-interval="5000">


                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="slider_cont" style="margin-top:-5%; aling-content:center; ">
                                                <h3>Seguridad para ti <br>Buscamos tu independencia</h3>
                                                <p>Sabemos que pasar por lo que tu pasas no es algo sencillo, queremos que te sientas libre, en este camino dificil.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-top:-10%; padding-top:-20%;">
                                        <div class="col-md-5">
                                            <div class="slider_cont">
                                                <p>Al tener esta facil comunicacion se vuelve mas sensillo cuando tenemos un recordatorio de nuestras citas, asi tu familiar y tu estaran pendientes de las mejoras de tu salud.</p>
                                            </div>
                                        </div>
                                    </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end slider section -->


<!-- Our Client -->
<div class="Client" style="align-content:center">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <h2 style="margin-top:10%; ">Algunos de nuestros pacientes</h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 offset-md-3" style="padding-left:10%;">
         <div class="Client_box" style="align-content:center;">
           <img src="../resources/views/images/client.jpg" alt="#"/>
           <h3>Laura rodriguez</h3>
           <p style="margin-top: 1%">Para ser sincera no sentia que una aplicacion me ayudara a cuidar a mi mama desde la distancia, creia que al ella ser mayor nos causaria mayor complejidad, pero mi madre ahora se siente mas tranquila, sentia que estaba todo el tiempo encima de ella pidiendole que se cuidase pero yo solo queria que ella estuviera bien, con Seguridad para ti, me siento mas tranquila de hacer mis actividades cotidianas ya que se que puedo ayudar a mama desde cualquier lugar a solo un click de distancia.</p>
           <i><img src="../resources/views/images/client_icon.png" height="80px" width="80px" alt="#"/></i>
         </div>
      </div>
    </div>
  </div>
</div>
<!-- end Our Client -->
</div>
    <!-- footer -->
    <footer>
        <div class="footer">
            <div class="container-fluid">
                <div class="row" >
                  <div class=" col-md-12">
                    <h2>Quejas o sugerencias<strong class="white"> Contactarnos aquí</strong></h2>
                  </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">

                        <form class="main_form">
                            <div class="row">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Nombre" type="text" name="Nombre">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Email" type="text" name="Email">
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <input class="form-control" placeholder="Telefono" type="text" name="Telefono">
                                </div>
                                <div style="width: 20%">
                                    <textarea class="textarea" placeholder="Mensaje" type="text" name="Mensaje"></textarea>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                    <button class="send">Enviar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12" style="margin-top: -20%; margin-left:45%">
                        <div class="img-box">
                            <figure><img src="https://i.pinimg.com/originals/d1/bd/0d/d1bd0d21a0ffacbab8d31907326a2db4.jpg" alt="img"  height="1000" width="1500"/></figure>
                        </div>
                    </div>
                </div>

            <div class="copyright">
                <div class="container">
                    <p>© 2021 Proyecto para la tecnologia</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->

    </div>
    </div>
    <div class="overlay"></div>
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

     <script src="js/jquery-3.0.0.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>


      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 5
               }
             }
           })
         })
      </script>
</body>
</html>

@endsection
