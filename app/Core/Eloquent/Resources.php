<?php

namespace App\Core\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Resources extends Model
{
     //pongo en singular para que indique solo 1
     public function article(){
        return $this->belongTo(Article::class, 'articulo_id', 'id');
        // Aqui relacion que un artuculo va a tener muchos recursos
        // Obtiene objetos
    }

}
