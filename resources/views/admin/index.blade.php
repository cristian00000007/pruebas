@extends('layouts.indexI')

@section('title', 'Admin')

@section('content')
<body style="background: ">

<div class="max-w-7xl mx-auto sm:px-6 lg:px-8"  style="margin-top: 5%">
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

      <table class="table-fixed w-full">
        <thead>
          <tr class="bg-indigo-500 text-white">
            <th class="w-20 py-4 ...">ID</th>
            <th class="w-1/12 py-4 ...">Nombre</th>
            <th class="w-1/20 py-4 ...">Email</th>
            <th class="w-1/12 py-4 ...">Rol</th>
            <th class="w-1/26 py-4 ...">Fecha / Creacion</th>
            <th class="w-1/26 py-4 ...">Fecha / Actualizacion</th>
            <th class="w-30 py-4 ...">Eliminar y Actualizar</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($login as $row)


          <tr>
            <td class="py-3 px-6">{{ $row->id }}</td>
            <td class="p-3">{{ $row->name}} {{ $row->surname}}</td>
            <td class="p-3">{{ $row->email }}</td>
            <td class="p-3">{{ $row->role }}</td>
            <td class="p-3 text-center">{{ $row->created_at }}</td>
            <td class="p-3 text-center">{{ $row->updated_at }}</td>
            <td class="p-3 flex justify-center">
              <form action="{{ route('admin.destroy', $row->id) }}" method="POST">
                @csrf
                @method('delete')
                <button class="bg-red-500 text-white px-3 py-1 rounded-sm mx-1">
                <i class="fas fa-trash"></i></button>
              </form>
              <a href="{{ route('admin.edit', $row->id) }}" class="bg-green-500 text-white px-3 py-1 rounded-sm">
              <i class="fas fa-pen"></i></a>
            </td>
          </tr>

          @endforeach

        </tbody>
      </table>
    </div>
</div>
</body>



@endsection
