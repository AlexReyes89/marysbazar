@extends('Layouts.plantilla')
@section('title','Producto|Show')
@section('content')


<h1>Bienvenido a la Página Principal del curso </h1>

<div>
    <a href="{{route('productos.index')}}">Volver a la lista</a>
    <a href="{{route('productos.edit',$producto)}}">Editar</a>
</div>
<div> 
    Nombre:{{$producto->name}}
    
</div>
<div>Descripción: {{$producto->description}}</div> 
<form  action="{{route('productos.destroy',$producto)}}" method="post">
    @csrf
    @method('delete')
    <div>
        <button type="submit">Eliminar</button>
    </div>
</form>



@endsection