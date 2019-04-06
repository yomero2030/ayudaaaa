<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class palabra extends Model
{
    //
    public function scopeSerchWord($query,$word){

        return $query->serch($word)->joinToImage()->order();
    }

    public function scopeSerch($query,$word){
        return $query->where("palabra",'LIKE',"%$word%");
    }

    public function scopeJoinToImage($query){
        return $query->join('imagenes','palabras.id_palabra','imagenes.palabra_id');
    }
    
     public function scopeOrder ($query){

        return $query->orderBy("palabras.id_palabra","DESC");
     }

     
     


}
