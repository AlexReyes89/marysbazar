@extends('Layouts.plantilla')
@section('title','Producto | Create')
@section('content')

    <h1>En esta pagina podras crear un producto</h1>

    <form action="{{route('productos.update',$producto)}}" method="POST">
        @csrf
        @method('put')
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name', $producto->name)}}">
        </label>
        @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>     
        @enderror

        <br>

        <label>
            Marca:
            <input type="text" name="brand" value="{{old('brand', $producto->brand)}}">
        </label>

        @error('brand')
        <br>
        <small>*{{$message}}</small>
        <br>     
        @enderror

        <br>

        <label>
            Color:
            <input type="text" name="color" value="{{old('color', $producto->color)}}">
        </label>

        @error('color')
        <br>
        <small>*{{$message}}</small>
        <br>     
        @enderror

        <br>

        <label>
            Tamaño:
            <input type="text" name="size" value="{{old('size', $producto->size)}}">
        </label>

        @error('size')
        <br>
        <small>*{{$message}}</small>
        <br>     
        @enderror

        <br>

        <label>
            Categoría:
            <input type="text" name="category" value="{{old('category', $producto->category)}}">
        </label>

        @error('category')
        <br>
        <small>*{{$message}}</small>
        <br>     
        @enderror

        <br>

        <label>
            Descripción:
            <textarea name="description" rows="5"> {{old('description', $producto->description)}} </textarea>
        </label>

        @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>     
        @enderror

        <br>

        <button type="submit">Actualizar</button>


    </form>
@endsection