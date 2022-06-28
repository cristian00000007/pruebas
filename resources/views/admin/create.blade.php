@extends('layouts.indexI')

@section('title', 'Create')

@section('content')
<style type="text/css">
    input{
        padding: 5%;
    }
</style>

<div style=" padding-top:5%; padding-left:30%; padding-right:30%; ">
    <form action="{{ route('admin.store') }}" method="POST" style="-webkit-box-shadow: 0px 34px 69px -47px rgba(0,0,0,0.78);
    -moz-box-shadow: 0px 34px 69px -47px rgba(0,0,0,0.78);
    box-shadow: 0px 34px 69px -47px rgba(0,0,0,0.78);">
@csrf

<h2 style="background: #84A3F0;" class="text-2x1 text-center py-4 mb-4 font-semibold">Crear pefil</h2>

<input class="my-3 w-3/4 mx-20 bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Nombre" name="name">

<input class="my-3 w-3/4 mx-20 bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Apellido" name="surname">

<input class="my-3 w-3/4 mx-20 bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Email" name="email">

<input class="my-3 w-3/4 mx-20 bg-gray-200 p-2 text-lg rounded placeholder-gray-900" placeholder="Contraseña" name="password">

<button type="submit" class="my-4 w-3/4 mx-20 bg-blue-500 p-3 font-semibold
rounded text-white hover:bg-blue-600">Enviar</button>

</form>

</div>



@endsection
