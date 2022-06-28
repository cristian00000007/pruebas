<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">

        * {
            margin:0px;
            padding:0px;
        }

        #header {
            margin:auto;
            width:500px;
            font-family:Arial, Helvetica, sans-serif;
        }

        ul, ol {
            list-style:none;
        }

        .nav > li {
            float:right;
        }

        .nav li a {
            background-color: whitesmoke;
            color:#434343;
            text-decoration:none;
            padding:10px 12px;
            display:block;
        }

        .nav li a:hover {
            background-color:#C5DEF2;
        }

        .nav li ul {
            display:none;
            position:absolute;
            min-width:140px;
        }

        .nav li:hover > ul {

            margin-left:-4%;
            display:block;
        }

        .nav li ul li {
            position:relative;
        }

        .nav li ul li ul {
            left:-140px;
            top:0px;
        }
        </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e8e52e6755.js" crossorigin="anonymous"></script>

    <title>@yield('tittle') - Seguridad para ti</title>

    <!-- Tailwind CSS Link -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">


  </head>
  <body class="text-gray-800">

    <nav class="flex py-5 text-white" style="background: #141515">
        <a href="../public" style="margin-left:5%; font-family:seminbold; text-white"><p class="texto-logo" style="font-size:180%; color:white;">Seguridad para ti</p></a>
        <ul class="px-16 ml-auto flex justify-end pt-1">
            @if(auth()->check())
            <p class="text-2xl">Bienvenido: <b>{{ auth()->user()->name}}</p>
             @if (auth()->user()->role == 'Admin')
             <li class="mx-6">

            </li>
            <li>

            </li>
            <div id="header">
                <ul class="nav">
                    <li><i class="fa-solid fa-bars fa-2x"></i>
                        <ul>
                            <li><a href="{{ route('admin.index') }}" class="
                                rounded bg-white text-blue-500 font-semibold">Administracion</a></li>
                            <li><a href="{{ route('admin.create') }}" class="text-white
                                rounded bg-blue-500 font-semibold hover:bg-blue-600">registrar perfil</a></li>
                            <li><a href="{{ route('login.destroy') }}" class="text-white
                                rounded bg-blue-500 font-semibold hover:bg-blue-600">Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

             @else
            </li>

            <div id="header">
                <ul class="nav">
                    <li><i class="fa-solid fa-bars fa-2x"></i>
                        <ul>

                            <li><a href="perfil" class="text-white
                                rounded bg-blue-500 font-semibold hover:bg-blue-600">perfil</a></li>
                            <li><a href="alarma" class="text-white
                                rounded bg-blue-500 font-semibold hover:bg-blue-600">Alarmas</a></li>
                            <li><a href="{{ route('login.destroy') }}" class="text-white
                                rounded bg-blue-500 font-semibold hover:bg-blue-600">Salir</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
             @endif


            @else


             <li class="mx-6">
                <a href="{{ route('login.index')}}" class="font-semibold
                text-white
                hover:bg-white hover:text-black py-3 px-4 rounded-md">Entrar</a>
            </li>
            <li>
                <a href="{{ route('register.index')}}" class="font-semibold
                text-white
                border-2 border-white py-2 px-4 rounded-md hover:bg-white
                hover:text-black">Registrar</a>
            </li>

            @endif
        </ul>



    </nav>

    @yield('content')


  </body>
</html>

