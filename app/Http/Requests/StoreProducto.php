<?php

namespace App\Http\Requests;

use Attribute;
use Illuminate\Foundation\Http\FormRequest;

class StoreProducto extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'brand'=>'required',
            'color'=>'required',
            'size'=>'required',
            'category'=>'required',
            'description'=>'required'
        ];
    }

    public function attributes()
    {
        return[
            'name'=>'Nombre del Producto',
            'brand'=>'Marca del Producto',
            'color'=>'Color del Producto',
            'size'=>'Tamaño del Producto',
            'category'=>'Categoría del Producto',
            'description'=>'Description del Producto',

        ];
        
    }

    public function messages()
    {
        return['description.required'=>'Ingrese :attribute'];
    }
}
