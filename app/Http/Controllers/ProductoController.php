<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Http\Requests\StoreProducto;

class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::orderBy('id','desc')->paginate();
        return view('productos.index', compact('productos'));
        
    }
    public function create(){
        return view('productos.create');

    }

    public function store(StoreProducto $request ){


      /*  $producto  = new Producto(); //Se crea el objeto
        $producto -> image = $request -> image;//Se asignan el valor al objeto en su propiedad
        $producto -> name = $request -> name;
        $producto -> brand = $request -> brand;
        $producto -> color = $request -> color;
        $producto -> size = $request -> size;
        $producto -> category = $request -> category;
        $producto ->description = $request ->description;

        $producto->save(); //Se guardan los datos en DB

 */
        $producto = Producto::create($request->all());

   

        return redirect()->route('productos.show',$producto);// Se redirecciona a la página indicada
    
    }

    public function show (Producto $producto){
        
        //$producto =  Producto::find($producto);

        return view('productos.show',compact('producto'));



    }

    public function edit(Producto $producto){
      
     
        return view ('productos.edit',compact('producto'));
    
    }

    public function update(StoreProducto $request ,Producto $producto){

     
        /*$producto -> image = $request -> image;
        $producto -> name = $request -> name;
        $producto -> brand = $request -> brand;
        $producto -> color = $request -> color;
        $producto -> size = $request -> size;
        $producto -> category = $request -> category;
        $producto ->description = $request ->description;

        $producto->save();*/

        $producto->update($request->all());

        return redirect()->route('productos.show',$producto);

    }

    public function destroy(Producto $producto){
        $producto->delete();
        return redirect()->route('productos.index');

    }
}