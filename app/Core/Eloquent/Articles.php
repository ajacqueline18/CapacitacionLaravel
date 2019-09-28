<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    // Declaro objeto publico
     public function resources(){
         return $this->hasMany(Resources::class, 'articulo_id', 'id');
         // Aqui relacion que un artuculo va a tener muchos recursos
         //retorna coleccion 
     }

}