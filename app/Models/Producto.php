<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    //protected $fillable = ['name','brand','color','size','category','description'];
     protected $guarded =[];

     public function getRouteKeyName()
    {
        //return $this->getKeyName();
        return 'slug';

    }
}
