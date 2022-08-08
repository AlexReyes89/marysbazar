@extends('Layouts.plantilla')
@section('title','Producto | Index')
@section('content')

    <h1>Pagina Principal de Productos</h1>
    
    <a href="{{route('productos.create')}}">Nuevo Producto</a>
    
    <ul>
        @foreach ( $productos as $producto)
            <li>
                <a href="{{route('productos.show',$producto)}}">
                    {{$producto->name}}
                </a>
            </li>
        @endforeach
    </ul>


    {{ $productos->links()}}
@endsection

