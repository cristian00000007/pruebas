@extends('layouts.indexI')

@section('title', 'Login')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="css\styles.css">
</head>
<body>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">

				<h3>Iniciar sección</h3>
			</div>
			<div class="card-body">
                <form class="mt-4" method="POST" action="">
                    @csrf

                    <input type="email" class="border border-gray-200 rounded-md bg-gray-200 w-full
                    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email"
                    id="email" name="email">

                    <input type="password" class="border border-gray-200 rounded-md bg-gray-200 w-full
                    text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña"
                    id="password" name="password">

                    @error('message')
                    <p class="border border-red-500 rounded-md bg-red-100 w-full
                    text-red-600 p-2 my-2">* {{ $message }}</p>
                    @enderror

                    <button type="submit" class="rounded-md bg-indigo-500 w-full text-lg
                    text-white font-semibold p-2 my-3 hover:bg-indigo-600">Entrar</button>

                </form>
            </div>
		</div>
	</div>
</div>
<footer>
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
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
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <textarea class="textarea" placeholder="Mensaje" type="text" name="Mensaje"></textarea>
                            </div>
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                <button class="send">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="img-box">
                        <figure><img src="https://i.pinimg.com/originals/d1/bd/0d/d1bd0d21a0ffacbab8d31907326a2db4.jpg" alt="img" /></figure>
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
</body>
</html>



@endsection
