@extends('layouts.app')


@section('titulo')
    Pagina Principal
@endsection


@section('contenido')

<div class="w-full max-w-screen-xl mx-auto p-6">
    <h3 class="text-2xl font-bold mb-6">Listado de Productos</h3>
    <a href="{{ route('productos.create') }}">
        <button class="bg-green-500 text-white px-4 py-2 rounded-lg mb-4 hover:bg-green-600">
            Nuevo
        </button>
    </a>
    <div class="bg-white shadow-md rounded-lg overflow-x-auto">
        <table class="min-w-full table-auto">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-blue-500">Id</th>
                    <th class="px-4 py-2 bg-blue-500">Nombre</th>
                    <th class="px-4 py-2 bg-blue-500">Precio Compra</th>
                    <th class="px-4 py-2 bg-blue-500">Precio Venta</th>
                    <th class="px-4 py-2 bg-blue-500">Tipo</th>
                    <th class="px-4 py-2 bg-blue-500">Descripcion</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                <tr>
                    <td class="px-4 py-2 text-center">{{ $producto->id }}</td>
                    <td class="px-4 py-2 text-center">{{ $producto->nombre }}</td>
                    <td class="px-4 py-2 text-center">{{ $producto->precio_compra }}</td>
                    <td class="px-4 py-2 text-center">{{ $producto->precio_venta }}</td>
                    <td class="px-4 py-2 text-center">{{ $producto->tipo }}</td>
                    <td class="px-4 py-2 text-center">{{ $producto->descripcion }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

  
@endsection