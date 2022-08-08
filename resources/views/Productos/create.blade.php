@extends('Layouts.plantilla')
@section('title','Producto | Edit')
@section('content')

    <h1>En esta pagina podras editar un producto</h1>

    <form action="{{route('productos.store')}}" method="POST">
        @csrf
        <label>
            Nombre:
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
        <br>
        <small>*{{$message}}</small>
        <br>     
        @enderror

        <br>

        <label>
            Marca:
            <input type="text" name="brand" value="{{old('brand')}}">
        </label>

        @error('brand')
        <br>
        <small>*{{$message}}</small>
        <br>     
        @enderror

        <br>

        <label>
            Color:
            <input type="text" name="color" value="{{old('color')}}">
        </label>

        @error('color')
        <br>
        <small>*{{$message}}</small>
        <br>     
        @enderror

        <br>

        <label>
            Tamaño:
            <input type="text" name="size" value="{{old('size')}}">
        </label>

        @error('size')
        <br>
        <small>*{{$message}}</small>
        <br>     
        @enderror

        <br>

        <label>
            Categoría:
            <input type="text" name="category" value="{{old('category')}}">
        </label>

        @error('category')
        <br>
        <small>*{{$message}}</small>
        <br>     
        @enderror

        <br>

        <label>
            Descripción:
            <textarea name="description" rows="5">{{old('description')}}  </textarea>
        </label>

        @error('description')
        <br>
        <small>*{{$message}}</small>
        <br>     
        @enderror

        <br>

        <button type="submit">Guardar</button>


    </form>
@endsection